<?php 

class Articles extends MY_Controller{


	public function __construct(){
 		parent:: __construct();
		$this->load->model('articlesmodel','articles');
 		if(!$this->session->userdata('role')=="admin")
 			return redirect ('user');
 	}
	//FUNCTION INVOLVING ARTICLES/POST
	public function browse_post(){
		
		//PAGINATION DETAILS
		$this->load->library('pagination');
		$config=[
			'base_url'	=>	base_url('index.php/articles/browse_post'),
			'per_page'	=>	5,
			'total_rows'=> $this->articles->count_login_user_articles(),
			'first_link'=>'<<',
			'last_link'=>'>>',
			'full_tag_open' => "<ul class ='pagination'>",
			'full_tag_close'=> "</ul>",
			'first_tag_open' => "<li class ='page-item'>",
			'first_tag_close'=> "</li>",
			'last_tag_open' => "<li class ='page-item'>",
			'last_tag_close'=> "</li>",
			'next_tag_open' => "<li class ='page-item'>",
			'next_tag_close'=> "</li>",
			'prev_tag_open' => "<li class ='page-item'>",
			'prev_tag_close'=> "</li>",
			'num_tag_open' => "<li class ='page-item'>",
			'num_tag_close'=> "</a></li>",
			'cur_tag_open' => "<li class ='page-item active'><a>",
			'cur_tag_close'=> "</a></li>"
		];
		$this->pagination->initialize($config);
		$articles= $this->articles->articles_list_browse($config['per_page'],$this->uri->segment(3));
		// PAGINATION DONE
		$usrname=$this->session->userdata('dname');
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
			$upload_error=$this->upload->display_errors();
			$this->load->view('admin/edit_article',['dname'=>$usrname,'article'=>$article,'upload_error'=>$upload_error]);
		}
	}


	
	public function delete_article()
	{
		$article_id=$this->input->post('article_id');
		$this->flashAndRedirect($this->articles->delete_article($article_id),'deleted','delete');			
	}


	public function browse(){
		$this->form_validation->set_rules('query','Query','required');
		if($this->form_validation->run()){
			$query=$this->input->post('query');
			return redirect("articles/search_results/$query");
		}
		else{
			return redirect('articles/browse_post');//Change the line to $this->browse_post() to show validation error message
		}
	}


	public function search_results($query){
		//PAGINATION DETAILS
		$this->load->library('pagination');
		$config=[
			'base_url'	=>	base_url("index.php/articles/search_results/$query"),
			'per_page'	=>	5,
			'total_rows'=> $this->articles->count_search_results($query),
			'first_link'=>'<<',
			'last_link'=>'>>',
			'full_tag_open' => "<ul class ='pagination'>",
			'full_tag_close'=> "</ul>",
			'first_tag_open' => "<li class ='page-item'>",
			'first_tag_close'=> "</li>",
			'last_tag_open' => "<li class ='page-item'>",
			'last_tag_close'=> "</li>",
			'next_tag_open' => "<li class ='page-item'>",
			'next_tag_close'=> "</li>",
			'prev_tag_open' => "<li class ='page-item'>",
			'prev_tag_close'=> "</li>",
			'num_tag_open' => "<li class ='page-item'>",
			'num_tag_close'=> "</a></li>",
			'cur_tag_open' => "<li class ='page-item active'><a>",
			'cur_tag_close'=> "</a></li>"
		];
		$this->pagination->initialize($config);
		// PAGINATION DONE
		$q = $this->articles->search_article( $query,$config['per_page'],$this->uri->segment(4));
		$usrname=$this->session->userdata('dname');
		$this->load->view('admin/search_results',['dname'=>$usrname,'articles'=>$q]);
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

 	

 }