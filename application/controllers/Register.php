<?php 

class Register extends MY_Controller{
	public function index(){
		$this->load->view('public/admin_signup');
	}
	public function signup(){
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
		if($this->form_validation->run('signup_rules')){
			//Validation successful
			$post=$this->input->post();
			$post['uname']=$post['username'];
			$post['pword']=md5($post['password']);
			unset($post['submit']);
			unset($post['confirmpassword']);
			unset($post['username']);
			unset($post['password']);
			$this->load->model('signupmodel','signup');
			if($this->signup->validate_signup($post))
			{
				$this->session->set_flashdata('register_alert','Your account has been successfully created.Now login to your account');
				return redirect('register/signup');
			}
			else
			{	
				$this->session->set_flashdata('register_alert','Signup failed');
				return redirect('register/signup');
			}
			
		}
		else
		{
			$this->load->view('public/admin_signup');
		}

	}

	public function __construct(){
		parent:: __construct();
		$this->load->helper(['email','security']);
	}
}