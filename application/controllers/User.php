<?php 

class User extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('homemodel','home');
	}

	public function index(){
		$id=$this->session->userdata('user_id');
		$role=$this->session->userdata('role');

		$slideshow_top=$this->home->slideshow_top();
		$top_articles=$this->home->top_articles();
		$new_posts=$this->home->new_posts();
		$dept_posts=$this->home->dept_posts();
		$career_posts=$this->home->career_posts();
		$campus_posts=$this->home->campus_posts();
		$views_posts=$this->home->views_posts();
		$views_posts=$this->home->views_posts();
		$latest_posts=$this->home->latest_posts();
		$comment_posts=$this->home->comment_posts();
		$editor_pick1=$this->home->editor_pick1();
		$editor_pick2=$this->home->editor_pick2();
		// DATA TO BE PASSED IN HOMEPAGE
		$data=[
				'id'=>$id,
				'role'=>$role,
				'top_articles'=>$top_articles,
				'slideshow_top'=>$slideshow_top,
				'new_posts'=>$new_posts,
				'dept_posts'=>$dept_posts,
				'career_posts'=>$career_posts,
				'campus_posts'=>$campus_posts,
				'views_posts'=>$views_posts,
				'latest_posts'=>$latest_posts,
				'comment_posts'=>$comment_posts,
				'editor_pick1'=>$editor_pick1,
				'editor_pick2'=>$editor_pick2,
		];

		$this->load->view('public/home.php',$data);
		// else
		// 	$this->load->view('public/afterLogin_home.php');

	}

 }



