<?php

class Signupmodel extends CI_Model{
	public function validate_signup($array){
		return $this->db->insert('users',$array);

	}
}