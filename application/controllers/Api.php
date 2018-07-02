<?php 
class Api extends MY_Controller{

	public function __construct(){
		parent::__construct();
		//LOADING MODELS FOR HOMEPAGE AND ARTICLES_DETAIL page
		$this->load->model('homemodel','home');
		$this->load->model('postviewmodel','post');
		$this->load->model('commentmodel','comment');
	}

	public function getfeaturedposts(){
		
	}
}