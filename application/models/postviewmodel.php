<?php 
class Postviewmodel extends CI_MOdel{
	public function recent_posts(){
		$q=$this->db
					->from('articles')
					->select(['title','img_path','excerpts','post_id'])
					->order_by('created_at','desc')
					->limit(4)
					->get();
		return $q->result();
	}
	public function find_article($id){
		$post=$this->db
					->where('post_id',$id)
					->set('view_count', 'view_count+1', FALSE)
					->update('articles');
		$q=$this->db
					->from('articles')
					->select()
					->where('post_id',$id)
					->get();
		
		return $q->row();
	}
	public function related_posts(){
		$q=$this->db
					->from('articles')
					->select()
					->order_by('created_at','desc')
					->limit(3)
					->get();
		return $q->result();
	}
}