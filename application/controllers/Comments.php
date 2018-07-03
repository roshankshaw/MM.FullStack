<?php 
class Comments extends MY_Controller{

	public function __construct(){
 		parent:: __construct();
		$this->load->model('commentmodel','comments');
		$this->load->model('articlesmodel','articles');
 		if(!$this->session->userdata('role')=="admin")
 			return redirect ('user');
 	}
	//FUNCTION INVOLVING ARTICLES/POST
	public function all_comments(){
		
		//PAGINATION DETAILS
		$this->load->library('pagination');
		$config=[
			'base_url'	=>	base_url('comments/all_comments'),
			'per_page'	=>	10,
			'total_rows'=> $this->comments->count_comments(),
			'first_link'=>'<<',
			'last_link'=>'>>',
			'full_tag_open' => "<ul class ='pagination'>",
			'full_tag_close'=> "</ul>",
			'first_tag_open' => "<li class ='page-item'>",
			'first_tag_close'=> "</li>",
			'last_tag_open' => "<li class ='page-item'>",
			'last_tag_close'=> "</li>",
			'next_tag_open' => "<li class ='page-item'>",
			'next_tag_close'=> "</li>",
			'prev_tag_open' => "<li class ='page-item'>",
			'prev_tag_close'=> "</li>",
			'num_tag_open' => "<li class ='page-item'>",
			'num_tag_close'=> "</a></li>",
			'cur_tag_open' => "<li class ='page-item active'><a>",
			'cur_tag_close'=> "</a></li>"
		];
		$this->pagination->initialize($config);
		$comments= $this->comments->all_comments_list($config['per_page'],$this->uri->segment(3));
		// PAGINATION DONE
		$usrname=$this->session->userdata('dname');
		$this->load->view('admin/all_comments.php',['dname'=>$usrname,'comments'=>$comments,'departments'=>$this->get_dpt_array(),'category'=>$this->category_array()]);
	}
	public function delete_comment(){
		$com_id=$this->input->post('comment_id');
		$this->comments->delete_comment($com_id);
		return redirect("comments/approved_comments");
	}
	public function unapprove_comment($com_id){
		$this->comments->unapprove_comment($com_id);
		return redirect("comments/approved_comments");
	}
	public function approve_comment($com_id){
		$this->comments->approve_comment($com_id);
		return redirect("comments/pending_comments");
	}


	public function pending_comments(){
		
		//PAGINATION DETAILS
		$this->load->library('pagination');
		$config=[
			'base_url'	=>	base_url('comments/pending_comments'),
			'per_page'	=>	10,
			'total_rows'=> $this->comments->count_pending_comments(),
			'first_link'=>'<<',
			'last_link'=>'>>',
			'full_tag_open' => "<ul class ='pagination'>",
			'full_tag_close'=> "</ul>",
			'first_tag_open' => "<li class ='page-item'>",
			'first_tag_close'=> "</li>",
			'last_tag_open' => "<li class ='page-item'>",
			'last_tag_close'=> "</li>",
			'next_tag_open' => "<li class ='page-item'>",
			'next_tag_close'=> "</li>",
			'prev_tag_open' => "<li class ='page-item'>",
			'prev_tag_close'=> "</li>",
			'num_tag_open' => "<li class ='page-item'>",
			'num_tag_close'=> "</a></li>",
			'cur_tag_open' => "<li class ='page-item active'><a>",
			'cur_tag_close'=> "</a></li>"
		];
		$this->pagination->initialize($config);
		$comments= $this->comments->all_pending_comments_list($config['per_page'],$this->uri->segment(3));
		// PAGINATION DONE
		$usrname=$this->session->userdata('dname');
		$this->load->view('admin/pending_comments.php',['dname'=>$usrname,'comments'=>$comments,'departments'=>$this->get_dpt_array(),'category'=>$this->category_array()]);
	}

	public function approved_comments(){
		
		//PAGINATION DETAILS
		$this->load->library('pagination');
		$config=[
			'base_url'	=>	base_url('comments/approved_comments'),
			'per_page'	=>	10,
			'total_rows'=> $this->comments->count_approved_comments(),
			'first_link'=>'<<',
			'last_link'=>'>>',
			'full_tag_open' => "<ul class ='pagination'>",
			'full_tag_close'=> "</ul>",
			'first_tag_open' => "<li class ='page-item'>",
			'first_tag_close'=> "</li>",
			'last_tag_open' => "<li class ='page-item'>",
			'last_tag_close'=> "</li>",
			'next_tag_open' => "<li class ='page-item'>",
			'next_tag_close'=> "</li>",
			'prev_tag_open' => "<li class ='page-item'>",
			'prev_tag_close'=> "</li>",
			'num_tag_open' => "<li class ='page-item'>",
			'num_tag_close'=> "</a></li>",
			'cur_tag_open' => "<li class ='page-item active'><a>",
			'cur_tag_close'=> "</a></li>"
		];
		$this->pagination->initialize($config);
		$comments= $this->comments->all_approved_comments_list($config['per_page'],$this->uri->segment(3));
		// PAGINATION DONE
		$usrname=$this->session->userdata('dname');
		$this->load->view('admin/approved_comments.php',['dname'=>$usrname,'comments'=>$comments,'departments'=>$this->get_dpt_array(),'category'=>$this->category_array()]);
	}
}