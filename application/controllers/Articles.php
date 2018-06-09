<?php 

class Articles extends MY_Controller{

	//FUNCTION INVOLVING ARTICLES/POST
	public function browse_post(){
		$usrname=$this->session->userdata('dname');
		// Articles model loaded as articles
		$articles=$this->articles->articles_list_browse();
		$this->load->view('admin/browse_post.php',['dname'=>$usrname,'articles'=>$articles]);
	}



	public function add_article(){
		$usrname=$this->session->userdata('dname');
		$this->load->view('admin/add_article.php',['dname'=>$usrname]);
	}
 
	public function store_article(){

		$config=[
				'upload_path'=>'./uploads/',
				'allowed_types'=>'jpeg|jpg|gif|png'
		];
		$this->load->library('upload',$config);

		//FORM VALIDATION PROCESS
		$this->form_validation->set_error_delimiters("<div class='invalid-feedback'><p class='text-danger small'>*","</p></div>");
		if($this->form_validation->run('add_article_rules') && $this->upload->do_upload()){

			$post=$this->input->post();
			unset($post['submit']);
			$data=$this->upload->data();
			$img_path=base_URL("uploads/".$data['raw_name'].$data['file_ext']);
			$post['img_path']=$img_path;
			
			//CHECKING SUCCESSFUL INPUT OF QUERY IN DB VIA FUNCTION FLASHANDREDIRECT()
			$this->flashAndRedirect($this->articles->add($post),'added','add');
		}
		else{
			$usrname=$this->session->userdata('dname');
			$upload_error=$this->upload->display_errors();
			$this->load->view('admin/add_article.php',['dname'=>$usrname,'upload_error'=>$upload_error]);

		}
		
	}


	public function edit_article($id){
		$usrname=$this->session->userdata('dname');
		$article=$this->articles->find_article($id);
		$this->load->view('admin/edit_article',['dname'=>$usrname,'article'=>$article]);
	}



	
	public function update_article($article_id)
	{
		$config=[
				'upload_path'=>'./uploads/',
				'allowed_types'=>'jpeg|jpg|gif|png'
		];
		$this->load->library('upload',$config);

		//FORM VALIDATION PROCESS
		$this->form_validation->set_error_delimiters("<div class='invalid-feedback'><p class='text-danger small'>*","</p></div>");
		if($this->form_validation->run('add_article_rules') && $this->upload->do_upload()){

			$post=$this->input->post();
			unset($post['submit']);
			$data=$this->upload->data();
			$img_path=base_URL("uploads/".$data['raw_name'].$data['file_ext']);
			$post['img_path']=$img_path;
			
			//CHECKING SUCCESSFUL INPUT OF QUERY IN DB VIA FUNCTION FLASHANDREDIRECT()
			$this->flashAndRedirect($this->articles->update_article($article_id,$post),'updated','update');
		}
		else{
			$usrname=$this->session->userdata('dname');
			$article=$this->articles->find_article($article_id);
			$this->load->view('admin/edit_article',['dname'=>$usrname,'article'=>$article,'upload_error'=>$upload_error]);
		}

	}





	
	public function delete_article()
	{
		$article_id=$this->input->post('article_id');
		$this->flashAndRedirect($this->articles->delete_article($article_id),'deleted','delete');			
	}
	

	private function flashAndRedirect($condition,$successKeyword,$failureKeyword)
	{
		if($condition)
		{
			$this->session->set_flashdata('feedback',"Article $successKeyword Successfully");	
			$this->session->set_flashdata('feedback_class','alert-success');	
		}	
		else{
			$this->session->set_flashdata('feedback',"Article Failed to $failureKeyword.Please try Again");	
			$this->session->set_flashdata('feedback_class','alert-danger');	
		}
		return redirect('articles/browse_post');
	}

 	public function __construct(){
 		parent:: __construct();
		$this->load->model('articlesmodel','articles');
 		if(!$this->session->userdata('role')=="admin")
 			return redirect ('user');
 	}

 }