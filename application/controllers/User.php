<?php 

class User extends CI_Controller{

	public function index(){
		$id=$this->session->userdata('user_id');
		$this->load->view('public/home.php',['id'=>$id]);
		// else
		// 	$this->load->view('public/afterLogin_home.php');

	}

 }



