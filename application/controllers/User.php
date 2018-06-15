<?php 

class User extends CI_Controller{
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


	// *********************FOR THE ARTICLE_PAGE************************

	public function view_article($post_id){
		$article=$this->post->find_article($post_id);
		$id=$this->session->userdata('user_id');
		$role=$this->session->userdata('role');		
		$related_posts=$this->post->related_posts();
		$recent_posts=$this->post->recent_posts();
		$post_comments=$this->comment->show_comment($post_id);
		$post_replies=$this->comment->show_all_replies($post_id);
		$data=[
				'id'=>$id,
				'role'=>$role,
				'post_id'=>$post_id,
				'article'=>$article,
				'related_posts'=>$related_posts,
				'recent_posts'=>$recent_posts,
				'comments'=>$post_comments,
				'replies'=>$post_replies,
		];

		$this->load->view('public/article_page',$data);
	}
	public function get_comment(){
		if($this->form_validation->run('comment_rules')){
			$post_id=$this->input->post('post_id');
			$post=$this->input->post();
			unset($post['submit']);
			$this->comment->add_comment($post);
			return	redirect("user/view_article/$post_id");
		}
	}
	public function get_reply($com_id){
		$post_id=$this->input->post('post_id');
		$post=$this->input->post();
		$post['comment_id']=$com_id;
		unset($post['submit']);
		$this->comment->add_reply($post);
		return	redirect("user/view_article/$post_id");
	}

}


