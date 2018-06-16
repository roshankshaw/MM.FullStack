<?php 
class Commentmodel extends CI_Model{
	public function add_comment($query){
		$q=$this->db->insert('comments',$query);
	}
	public function show_comment($post_id){
		$q=$this->db
					->select()
					->from('comments')
					->where('post_id',$post_id)
					->order_by('created_at','asc')
					->get();
		return $q->result();
	}
	public function delete_comment($com_id){
		return $this->db->delete('comments',['comment_id'=>$com_id]);
	}
	public function add_reply($post){
		$q=$this->db->insert('reply',$post);
	}

	public function show_all_replies($post_id){
		$q=$this->db
					->select()
					->from('reply')
					->where('post_id',$post_id)
					->get();
		return $q->result();
	}
	public function delete_reply($rep_id){
		return $this->db->delete('reply',['reply_id'=>$rep_id]);
	}
	public function find_comment($com_id)
	{
		$q=$this->db
					->from('comments')
					->select()
					->where('comment_id',$com_id)
					->get();
		return $q->row();
	}
	public function update_comment($query,$com_id)
	{
		return $this->db->where('comment_id',$com_id)->update('comments',$query);
	}
	public function find_reply($rep_id)
	{
		$q=$this->db
					->from('reply')
					->select()
					->where('reply_id',$rep_id)
					->get();
		return $q->row();
	}
	public function update_reply($query,$rep_id)
	{
		return $this->db->where('reply_id',$rep_id)->update('reply',$query);
	}


}

