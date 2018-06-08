<?php 

class User extends CI_Controller{

	public function index(){
		if(!$this->session->userdata('user_id'))
			$this->load->view('public/home.php');
		else
			$this->load->view('public/afterLogin_home.php');

	}

 }



