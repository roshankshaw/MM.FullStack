<?php 

class Admin extends MY_Controller{
	public function dashboard(){		
		$usrname=$this->session->userdata('dname');
		$this->load->view('admin/dashboard',['dname'=>$usrname]);
	}


 }



