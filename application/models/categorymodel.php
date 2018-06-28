<?php 
class Categorymodel extends CI_Model{

	public function find_post($value)
	{
		$q=$this->db
				->from('articles')
				->select()
				->where('category',$value)
				->limit(4)
				->get();
		return $q->result();
	}

}
