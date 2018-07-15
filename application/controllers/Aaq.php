<?php 
class Aaq extends MY_Controller{

	public function __construct(){
		parent::__construct();
		//LOADING MODELS FOR HOMEPAGE AND ARTICLES_DETAIL page
		$this->load->model('homemodel','home');
		$this->load->model('postviewmodel','post');
		$this->load->model('commentmodel','comment');
		$this->load->model('aaqmodel','aaq');
		$this->load->model('ajaxsearchmodel','search');
	}

	public function index(){
		$id=$this->session->userdata('user_id');
		$role=$this->session->userdata('role');		
		$related_posts=$this->post->related_posts();
		$recent_posts=$this->post->recent_posts();
		$data=[
				'id'=>$id,
				'role'=>$role,
				'related_posts'=>$related_posts,
				'recent_posts'=>$recent_posts,
		];
		$this->session->set_userdata('referred_from', current_url());
		$this->load->view('public/askaquestion.php',$data);
	}

	public function fetch(){
		$output='';
		$query='';
		if($this->input->post('query')){
			$query=$this->input->post('query');
			$data =$this->search->fetch_question($query);
			if($data->num_rows() > 0){
				$search_results=$data->result();
				foreach($search_results as $image){
					$output.='<a href="'.base_URL("aaq/find_question/{$image->question_id}").'" class="list-group-item list-group-item-action">'.$image->query.'</a>';
				}
			}
		}
		else{
			$output.='<div class="col-md-12 col-sm-12">
						<h6 class="text-default">No Related questions found..ask a new question</h6>
					</div>';
		}
		echo $output;
	}


	public function add(){
		$id=$this->session->userdata('user_id');
		$role=$this->session->userdata('role');		
		$related_posts=$this->post->related_posts();
		$recent_posts=$this->post->recent_posts();
		$data=[
				'id'=>$id,
				'role'=>$role,
				'related_posts'=>$related_posts,
				'recent_posts'=>$recent_posts,
		];

		$this->load->view('public/add_question.php',$data);
	}

	public function add_question(){
		$this->form_validation->set_error_delimiters("<div><p class='text-danger small'>*","</p></div>");
		if($this->form_validation->run('question_rules')){
			$post=$this->input->post();
			if($this->aaq->add_question($post))
			{
				$this->session->set_flashdata('feedback',"Question added Successfully");	
				$this->session->set_flashdata('feedback_class','alert-success');	
			}	
			else{
				$this->session->set_flashdata('feedback',"Question Failed to add.Please try Again");	
				$this->session->set_flashdata('feedback_class','alert-danger');	
			}
			return redirect('aaq/add');
		}
		else{
			$id=$this->session->userdata('user_id');
			$role=$this->session->userdata('role');		
			$related_posts=$this->post->related_posts();
			$recent_posts=$this->post->recent_posts();
			$data=[
					'id'=>$id,
					'role'=>$role,
					'related_posts'=>$related_posts,
					'recent_posts'=>$recent_posts,
			];

			$this->load->view('public/add_question.php',$data);
		}

	}

	public function find_question($q_id){
		$result=$this->aaq->find_question($q_id);
		$id=$this->session->userdata('user_id');
		$role=$this->session->userdata('role');		
		$related_posts=$this->post->related_posts();
		$recent_posts=$this->post->recent_posts();
		$answers=$this->aaq->fetch_answer($q_id);
		$data=[
				'id'=>$id,
				'role'=>$role,
				'related_posts'=>$related_posts,
				'recent_posts'=>$recent_posts,
				'result'=>$result,
				'answers'=>$answers
		];
		$this->session->set_userdata('referred_from', current_url());
		$this->load->view('public/view_question.php',$data);
	}

	public function add_answer(){
		if($this->form_validation->run('answer_rules')){
			$post=$this->input->post();
			if($this->aaq->add_answer($post))
				return redirect($this->session->userdata('referred_from'));
		}
		else{
			return show_404();
		}

	}
}	
