<?php 
class Category extends MY_Controller{
	public function __construct(){
		parent::__construct();
		//LOADING MODELS FOR CATEGORY AND ARTICLES_DETAIL page
		$this->load->model('postviewmodel','post');
		$this->load->model('categorymodel','category');
	}

	public function view_page($cat){
		if(!$cat)
			return show_404();
		$id=$this->session->userdata('user_id');
		$role=$this->session->userdata('role');
		$recent_posts=$this->post->recent_posts();
		$category=$this->category->find_post($cat);
		$type=$this->category_array();
		// DATA TO BE PASSED IN HOMEPAGE
		$data=[
				'id'=>$id,
				'role'=>$role,
				'recent_posts'=>$recent_posts,
				'category'=>$category,
				'type'=>$type
			];
		$this->load->view('public/Category.php',$data);
	}
}