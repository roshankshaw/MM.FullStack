<?php 

class Admin extends MY_Controller{
	public function dashboard(){		
		$usrname=$this->session->userdata('dname');
		$this->load->view('admin/dashboard',['dname'=>$usrname]);
	}

	//FUNCTION INVOLVING ARTICLES/POST
	public function browse_post(){
		$usrname=$this->session->userdata('dname');
		$this->load->view('admin/browse_post.php',['dname'=>$usrname]);
	}



	public function add_article(){
		$usrname=$this->session->userdata('dname');
		$this->load->view('admin/add_article.php',['dname'=>$usrname]);
	}
 
	public function store_article(){
		
		//FORM VALIDATION PROCESS
		$this->form_validation->set_error_delimiters("<div class='invalid-feedback'><p class='text-danger small'>*","</p></div>");
		if($this->form_validation->run('add_article_rules')){
			$post=$this->input->post();
			unset($post['submit']);
			$this->load->model('articlesmodel','articles');
			//CHECKING SUCCESSFUL INPUT OF QUERY IN DB VIA FUNCTION FLASHANDREDIRECT()
			$this->flashAndRedirect($this->articles->add($post),'added','add');
		}
		else{
			$usrname=$this->session->userdata('dname');
			$this->load->view('admin/add_article.php',['dname'=>$usrname]);

		}
		
	}


	public function edit_article(){

	}
	public function delete_article(){

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
		return redirect('admin/browse_post');
	}

 	public function __construct(){
 		parent:: __construct();
 		if(!$this->session->userdata('role')=="admin")
 			return redirect ('user');
 	}

 }



