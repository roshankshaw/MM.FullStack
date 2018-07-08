<?php 	
class Ajaxsearchmodel extends CI_Model{
	public function fetch_data($query)
	{
		$this->db->select();
		$this->db->from('articles');
		if($query != '')
		{
			$this->db->like('title',$query);
			$this->db->or_like('content',$query);
		}
		$this->db->order_by('created_at','desc');
		return $this->db->get(); 
	}
}
