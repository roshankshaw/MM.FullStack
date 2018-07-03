<?php 
class Api extends MY_Controller{

	public function __construct(){
		parent::__construct();
		//LOADING MODELS FOR HOMEPAGE AND ARTICLES_DETAIL page
		$this->load->model('homemodel','home');
		$this->load->model('apimodel','api');
	}

	public function getfeaturedposts(){
		$query=$this->api->getfeatured();
		foreach($query as $row)
		{
			unset($row->content);
			unset($row->img_path);
		}
		$posts = new stdclass();
		if($query)
		{
			$posts->success=true;
			$posts->data=$query;
		}
		else
		{
			$posts->success=false;
			$posts->error="Invalid input or No data found...";
		}
		$data['articles']=json_encode($posts);
		$this->load->view('public/api',$data);
		
	}
	public function getpostsbytab()
	{
		$tab_name=$this->uri->segment(5);
		$offset=$this->uri->segment(6);
		$limit=$this->uri->segment(7);
		$a=$this->category_array();
		$value=array_search($tab_name,$a);
		if(!$limit)
			$limit=6;
		if(!$offset)
			$offset=0;
		$this->load->library('pagination');
		$config=[
			'base_url'	=>	base_url('api/getpostbytab'),
			'per_page'	=>	$limit,
			'total_rows'=> $this->api->count_tab_articles($value),
		];
		$this->pagination->initialize($config);
		$articles= $this->api->get_tab_posts($value,$limit,$offset);
		foreach($articles as $row)
		{
			unset($row->content);
			unset($row->img_path);
		}
		$posts = new stdclass();
		if($articles && $value)
		{
			$posts->success=true;
			$posts->data=$articles;
		}
		else
		{
			$posts->success=false;
			$posts->error="Invalid input or No data found...";
		}
		$data['articles']=json_encode($posts);
		$this->load->view('public/api',$data);
	}
	
	public function getpostsbycategory()
	{
		$value=$this->uri->segment(5);
		$offset=$this->uri->segment(6);
		$limit=$this->uri->segment(7);
		if(!$limit)
			$limit=6;
		if(!$offset)
			$offset=0;
		$this->load->library('pagination');
		$config=[
			'base_url'	=>	base_url('api/getpostsbycategory'),
			'per_page'	=>	$limit,
			'total_rows'=> $this->api->count_cat_tab_articles($value),
		];
		$this->pagination->initialize($config);
		$articles= $this->api->get_cat_tab_posts($value,$limit,$offset);
		foreach($articles as $row)
		{
			unset($row->content);
			unset($row->img_path);
		}
		$posts = new stdclass();
		if($articles && $value)
		{
			$posts->success=true;
			$posts->data=$articles;
		}
		else
		{
			$posts->success=false;
			$posts->error="Invalid input or No data found...";
		}
		$data['articles']=json_encode($posts);
		$this->load->view('public/api',$data);
	}


	public function getpostbyid()
	{
		$id=$this->uri->segment(4);
		$articles= $this->api->get_post_id($id);
		foreach($articles as $row)
		{
			unset($row->content);
			unset($row->img_path);
		}
		$posts = new stdclass();
		if($articles)
		{
			$posts->success=true;
			$posts->data=$articles;
		}
		else
		{
			$posts->success=false;
			$posts->error="Invalid input or No data found...";
		}
		$data['articles']=json_encode($posts);
		$this->load->view('public/api',$data);
	}

	public function geteditorspick(){
		$query=$this->api->get_editor_pick();
		foreach($query as $row)
		{
			unset($row->content);
			unset($row->img_path);
		}
		$posts = new stdclass();
		if($query)
		{
			$posts->success=true;
			$posts->data=$query;
		}
		else
		{
			$posts->success=false;
			$posts->error="Invalid input or No data found...";
		}
		$data['articles']=json_encode($posts);
		$this->load->view('public/api',$data);
		
	}

	public function getlatestposts(){
		$query=$this->api->getlatest();
		foreach($query as $row)
		{
			unset($row->content);
			unset($row->img_path);
		}
		$posts = new stdclass();
		if($query)
		{
			$posts->success=true;
			$posts->data=$query;
		}
		else
		{
			$posts->success=false;
			$posts->error="Invalid input or No data found...";
		}
		$data['articles']=json_encode($posts);
		$this->load->view('public/api',$data);
		
	}

	public function searchposts()
	{
		$value=$this->uri->segment(3);
		$offset=$this->uri->segment(4);
		$limit=$this->uri->segment(5);
		if(!$limit)
			$limit=6;
		if(!$offset)
			$offset=0;
		$this->load->library('pagination');
		$config=[
			'base_url'	=>	base_url('api/searchposts'),
			'per_page'	=>	$limit,
			'total_rows'=> $this->api->count_search_results($value),
		];
		$this->pagination->initialize($config);
		$articles= $this->api->get_search_results($value,$limit,$offset);
		foreach($articles as $row)
		{
			unset($row->content);
			unset($row->img_path);
		}
		$posts = new stdclass();
		if($articles && $value)
		{
			$posts->success=true;
			$posts->data=$articles;
		}
		else
		{
			$posts->success=false;
			$posts->error="Invalid input or No data found...";
		}
		$data['articles']=json_encode($posts);
		$this->load->view('public/api',$data);
	}

	public function getcomments(){
		$id=$this->uri->segment(4);
		$value=$this->api->getcomments($id);
		foreach($value as $row)
		{
			unset($row->comment_body);
		}
		$posts = new stdclass();
		if($value)
		{
			$posts->success=true;
			$posts->data=$value;
		}
		else
		{
			$posts->success=false;
			$posts->error="Invalid input or No data found...";
		}
		$data['articles']=json_encode($posts);
		$this->load->view('public/api',$data);
	}

}