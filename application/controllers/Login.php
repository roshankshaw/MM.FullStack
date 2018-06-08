<?php 
class Login extends MY_Controller{

	public function index(){
		if($this->session->userdata('user_id'))
			return redirect('admin/dashboard');
		$this->load->view('public/admin_login.php');
	}
	public function __construct(){
		parent:: __construct();
		$this->load->helper('form');
	}
	public function admin_login(){

		if($this->session->userdata('user_id'))
			return redirect('admin/dashboard');

		// Form validation process
		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		if($this->form_validation->run('login_rules'))
		{
			$username=$this->input->post('username');
			$password=md5($this->input->post('password'));
			$this->load->model('loginmodel');
			$user_details=$this->loginmodel->validate_login($username,$password);
			$login_id=$user_details->id;
			$role=$user_details->role;
			$dname=$user_details->dname;
			if($login_id)
			{
				$this->session->set_userdata(['user_id'=>$login_id,'dname'=>$dname,'role'=>$role]);
				return redirect('login/login_redirect');
			}
			else
			{
				$this->session->set_flashdata('login_alert','Invalid Username/Password.');
				return redirect('login');
			}
		}
		else{
			$this->load->view('public/admin_login.php');
		}
	}
	public function login_redirect(){
		if($role=='admin')
				return redirect('admin/dashboard');
			else
				return redirect('user');
	}
	public function logout(){
		$this->session->unset_userdata(['user_id','dname','role']);
		return redirect('user');
	}
}