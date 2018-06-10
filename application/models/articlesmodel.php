<?php 

class Articlesmodel extends CI_Model{
	public function add($array){
		return $this->db->insert('articles',$array);
	}
	public function articles_list_browse($limit,$offset)
	{
		$user_id=$this->session->userdata('user_id');
		$query = $this->db
							->select(['title','post_id','category','status'])
							->from('articles')
							->limit($limit,$offset)
							->order_by('created_at','desc')
							->where('author_id',$user_id)
							->get();
		return $query->result();
	}
	public function find_article($article_id)
	{
		$q= $this->db->select(['post_id','title','content','excerpts','img_path'])
						->where('post_id',$article_id)
						->get('articles');
		return $q->row();
	}
	public function update_article($article_id,$article){
		return $this->db->where('post_id',$article_id)->update('articles',$article);
	}
	public function delete_article($article_id){
		return $this->db->delete('articles',['post_id'=>$article_id]);
	}
	public function search_article($query, $limit, $offset)
	{
		$user_id=$this->session->userdata('user_id');
		$q = $this->db
						->from('articles')
						->like('title',$query)
						->limit($limit,$offset)
						->where('author_id',$user_id)
						->get();
		return $q->result();
	}

	// FOR PAGINATION
	public function count_login_user_articles(){
		$user_id=$this->session->userdata('user_id');
		$q=$this->db
					->select(['title','post_id'])
					->where('author_id',$user_id)
					->get('articles');
		return $q->num_rows(); 

	}
	public function count_search_results($query){
		$user_id=$this->session->userdata('user_id');
		$q=$this->db
					->from('articles')	
					->like('title',$query)
					->where('author_id',$user_id)
					->get();
		return $q->num_rows();
	}

}


