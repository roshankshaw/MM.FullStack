<?php 	
class Apimodel extends CI_Model{
	public function getfeatured(){
		$q=$this->db
					->from('articles')
					->select()
					->where('featured','1')
					->get();
		return $q->result();
	}
	public function count_tab_articles($value){
		$q=$this->db
					->from('articles')
					->where(['category'=>$value])
					->order_by('created_at','desc')
					->get();
		return $q->num_rows();
	}
	public function get_tab_posts($value,$limit,$offset){
		$q=$this->db
					->from('articles')
					->where(['category'=>$value])
					->limit($limit,$offset)
					->get();
		return $q->result();
	}
	public function count_cat_tab_articles($value){
		$q=$this->db
					->from('articles')
					->where(['sub_category'=>$value])
					->order_by('created_at','desc')
					->get();
		return $q->num_rows();
	}
	public function get_cat_tab_posts($value,$limit,$offset){
		$q=$this->db
					->from('articles')
					->where(['sub_category'=>$value])
					->limit($limit,$offset)
					->get();
		return $q->result();
	}
	public function get_post_id($id){
		$q=$this->db
					->from('articles')
					->where('post_id',$id)
					->get();
		return $q->row();
	}
	public function get_editor_pick(){
		$q=$this->db
					->from('articles')
					->order_by('view_count','desc')
					->limit(5)
					->get();
		return $q->result();
	}
	public function getlatest(){
		$q=$this->db
					->from('articles')
					->order_by('created_at','desc')
					->limit(5)
					->get();
		return $q->result();
	}
	public function count_search_results($value){
		$q=$this->db
					->from('articles')
					->like('title',$value)
					->or_like('content',$value)
					->order_by('created_at','desc')
					->get();
		return $q->num_rows();
	}
	public function get_search_results($value,$limit,$offset){
		$q=$this->db
					->from('articles')
					->like('title',$value)
					->or_like('content',$value)
					->order_by('created_at','desc')
					->limit($limit,$offset)
					->get();
		return $q->result();
	}
	public function getcomments($id){
		$q=$this->db
					->from('comments')
					->where('post_id',$id)
					->order_by('created_at','desc')
					->get();
		return $q->result();
	}
	public function add_comment($query){
		if($this->db->insert('comments',$query)){
			return $this->db->insert_id();
		}
		else{
			return false;
		}
	}
	public function get_author_name($id){
		$q=$this->db
					->from('users')
					->where('id',$id)
					->get();
		return $q->row()->dname;
	}
}
