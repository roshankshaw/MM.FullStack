<?php 	
class Aaqmodel extends CI_Model{
	public function add_question($query){
		return $this->db->insert('questions',$query);
	}
	public function find_question($id){
		$q=$this->db
						->select()
						->where('question_id',$id)
						->get('questions');
		return $q->row();
	}
	public function fetch_answer($id){
		$q=$this->db
					->select()
					->where('question_id',$id)
					->get('answers');
		return $q->result();
	}
	public function add_answer($query){
		return $this->db->insert('answers',$query);
	}
}