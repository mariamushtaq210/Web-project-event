<?php
class comment_model extends CI_MODEL
{
	function insert()
	{
		 $data=array("user_id"=>$this->session->userdata['id'],
		 "e_id"=>$this->input->post('e_id'),
		 "user_name"=>$this->session->userdata['username'],
		 "comment"=>$this->input->post('comment'));
		return $this->db->insert('comments',$data);
	}
	function show($e_id)
	{
		$this->db->where("e_id",$e_id);
		$this->db->from("comments");
		return $this->db->get();
	}
	
	
}



?>