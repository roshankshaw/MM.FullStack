<?php 
class Commentmodel extends CI_Model{
	public function add_comment($query){
		return $this->db->insert('comments',$query);
	}
	public function show_comment($post_id){
		$q=$this->db
					->select()
					->from('comments')
					->where(['post_id'=>$post_id,'status'=>'1'])
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


// ************************************************FOR ADMIN*********************************************************************

	public function count_comments()
	{
		$q=$this->db
					->select(['author_name','comment_body','created_at','Status'])
					->get('comments');
		return $q->num_rows();
	}
	public function all_comments_list($limit,$offset)
	{
		$query = $this->db
							->select()
							->from('comments')
							->limit($limit,$offset)
							->order_by('created_at','desc')
							->get();
		return $query->result();
	}

	public function count_approved_comments()
	{
		$q=$this->db
					->select(['author_name','comment_body','created_at','Status'])
					->where('Status',1)
					->get('comments');
		return $q->num_rows();
	}
	public function all_approved_comments_list($limit,$offset)
	{
		$query = $this->db
							->select()
							->from('comments')
							->where('Status',1)
							->limit($limit,$offset)
							->order_by('created_at','desc')
							->get();
		return $query->result();
	}
	public function unapprove_comment($com_id)
	{
		return $this->db
						->where('comment_id',$com_id)
						->update('comments',['Status'=>0]);
	}


	public function count_pending_comments()
	{
		$q=$this->db
					->select(['author_name','comment_body','created_at','Status'])
					->where('Status',0)
					->get('comments');
		return $q->num_rows();
	}
	public function all_pending_comments_list($limit,$offset)
	{
		$query = $this->db
							->select()
							->from('comments')
							->where('Status',0)
							->limit($limit,$offset)
							->order_by('created_at','desc')
							->get();
		return $query->result();
	}
	public function approve_comment($com_id)
	{
		return $this->db
						->where('comment_id',$com_id)
						->update('comments',['Status'=>1]);
	}
}

