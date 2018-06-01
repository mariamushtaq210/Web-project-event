<?php
class join_model extends CI_MODEL
{
	function insert($e_id,$user_id)
	{
		$data=array("e_id"=>$e_id,"user_id"=>$user_id);
		$this->db->insert('join',$data);
	}
	
	
}


?>