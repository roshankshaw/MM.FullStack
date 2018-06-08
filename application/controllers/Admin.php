<?php 

class Admin extends CI_Controller{
	public function dashboard(){		
		if($this->session->userdata('role')=="admin")
			$this->load->view('admin/dashboard');
		else
			return redirect('user');		
	}

 }



