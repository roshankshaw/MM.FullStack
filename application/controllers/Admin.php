<?php 

class Admin extends MY_Controller{
	public function __construct(){
 		parent:: __construct();
		$this->load->model('articlesmodel','articles');
 		if(!$this->session->userdata('role')=="admin")
 			return redirect ('user');
 	}
	public function dashboard(){		
		$usrname=$this->session->userdata('dname');
		$this->load->view('admin/dashboard',['dname'=>$usrname]);
	}


 }



