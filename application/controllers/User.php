<?php 

class User extends CI_Controller{

	public function index(){
		$id=$this->session->userdata('user_id');
		$role=$this->session->userdata('role');
		$this->load->view('public/home.php',['id'=>$id,'role'=>$role]);
		// else
		// 	$this->load->view('public/afterLogin_home.php');

	}

 }



