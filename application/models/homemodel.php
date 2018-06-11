<?php 	
class Homemodel extends CI_Model{
	public function slideshow_top(){
		$q=$this->db
					->from('articles')
					->select(['title','img_path','excerpts','post_id'])
					->order_by('created_at','desc')
					->limit(3)
					->get();
		return $q->result();
	}
	public function top_articles(){
		$q=$this->db
					->from('articles')
					->select(['title','img_path','excerpts','post_id'])
					->order_by('created_at','desc')
					->limit(6)
					->get();
		return $q->result();
	}
	public function new_posts(){
		$q=$this->db
					->from('articles')
					->select(['title','img_path','excerpts','post_id'])
					->order_by('created_at','desc')
					->limit(4)
					->get();
		return $q->result();
	}
	public function dept_posts(){
		$q=$this->db
					->from('articles')
					->select(['title','img_path','excerpts','post_id'])
					->order_by('created_at','desc')
					->limit(4)
					->get();
		return $q->result();
	}
	public function career_posts(){
		$q=$this->db
					->from('articles')
					->select(['title','img_path','excerpts','post_id'])
					->order_by('created_at','desc')
					->limit(4)
					->get();
		return $q->result();
	}
	public function campus_posts(){
		$q=$this->db
					->from('articles')
					->select(['title','img_path','excerpts','post_id'])
					->order_by('created_at','desc')
					->limit(4)
					->get();
		return $q->result();
	}

	public function views_posts(){
		$q=$this->db
					->from('articles')
					->select(['title','img_path','excerpts','post_id'])
					->order_by('created_at','desc')
					->limit(4)
					->get();
		return $q->result();
	}
	public function latest_posts(){
		$q=$this->db
					->from('articles')
					->select(['title','img_path','excerpts','post_id'])
					->order_by('created_at','desc')
					->limit(4)
					->get();
		return $q->result();
	}
	public function comment_posts(){
		$q=$this->db
					->from('articles')
					->select(['title','img_path','excerpts','post_id'])
					->order_by('created_at','desc')
					->limit(4)
					->get();
		return $q->result();
	}
	public function editor_pick1(){
		$q=$this->db
					->from('articles')
					->select(['title','img_path','excerpts','post_id'])
					->order_by('created_at','desc')
					->limit(4)
					->get();
		return $q->result();
	}
	public function editor_pick2(){
		$q=$this->db
					->from('articles')
					->select(['title','img_path','excerpts','post_id'])
					->order_by('created_at','desc')
					->limit(4,4)
					->get();
		return $q->result();
	}
}