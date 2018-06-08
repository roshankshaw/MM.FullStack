<?php 

class Articlesmodel extends CI_Model{
	public function add($array){
		return $this->db->insert('articles',$array);
	}
}


