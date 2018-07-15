<?php 
class Search extends MY_Controller{
	public function __construct(){
		parent::__construct();
		//LOADING MODELS FOR HOMEPAGE AND ARTICLES_DETAIL page
		$this->load->model('postviewmodel','post');
		$this->load->model('ajaxsearchmodel','search');
	}

	public function searchpost(){
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
		$this->load->view('public/search_articles',$data);
	}

	public function fetch(){
		$output='';
		$query='';
		if($this->input->post('query')){
			$query=$this->input->post('query');
			$data =$this->search->fetch_data($query);
			if($data->num_rows() > 0){
				$search_results=$data->result();
				foreach($search_results as $image){
					$output.='<div class="col-md-4 col-sm-12" >
									<div class="post-new card">
										<img src="'.$image->img_path.'" alt="newpost" class="img-fluid newtop">        
										<center><article class="strong stitle">'.anchor("user/view_article/{$image->post_id}",$image->title).'</article></center>
										<center><article class="small sexcerpts">'.anchor("user/view_article/{$image->post_id}",$image->excerpts).'</article></center>  
									</div>
								</div>';
				}
			}
			else{
				$output.='<div class="col-md-12 col-sm-12" >
							<h4>No Data Found</h4>
						</div>';
			}
			echo $output;
		}
	}
}