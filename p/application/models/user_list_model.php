<?php
class user_list_model extends CI_MODEL
{
	
	function load_blocked_user()
	{
		
		 $this->db->from('user');
		  $this->db->where('block','1'); 
	  $q = $this->db->get();  


	return $q;	
	
}
function load_unblocked_user()
	{
		
		 $this->db->from('user');
		 $this->db->where('block','0'); 
	  $q = $this->db->get();  
	return $q;	
	
}



}
?>