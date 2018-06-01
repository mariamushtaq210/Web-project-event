<?php
class admin_event_model extends CI_MODEL
{
	function load_accepted_event()
	{
		
		 $this->db->from('events');
		 $this->db->where('e_request','accepted'); 
	  $q = $this->db->get();  


	return $q;	
	
}
function load_pending_event()
	{
		
		 $this->db->from('events');
		 $this->db->where('e_request','pending'); 
	  $q = $this->db->get();  


	return $q;	
	
}
function load_rejected_event()
	{
		
		 $this->db->from('events');
		 $this->db->where('e_request','rejected'); 
	  $q = $this->db->get();  


	return $q;	
	
}



}
?>