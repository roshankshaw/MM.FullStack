<?php 
class Polls extends MY_Controller{

	public function __construct(){
		parent::__construct();
		//LOADING MODELS FOR HOMEPAGE AND ARTICLES_DETAIL page
		$this->load->model('homemodel','home');
		$this->load->model('postviewmodel','post');
		$this->load->model('commentmodel','comment');
	}

	public function index(){
		$id=$this->session->userdata('user_id');
		$role=$this->session->userdata('role');
		// DATA TO BE PASSED IN HOMEPAGE
		$recent_posts=$this->post->recent_posts();
		$data=[		
				'id'=>$id,
				'role'=>$role,
				'recent_posts'=>$recent_posts,
		];

		$this->load->view('public/polls.php',$data);
	}
}