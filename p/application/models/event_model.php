<?php
class event_model extends CI_MODEL
{
	function load_event()
	{
		
		 $this->db->from('events');
  $st="e_request='accepted'";
  $this->db->where($st, NULL, FALSE);  
  $q = $this->db->get();  


return $q;	
	
}


function load_event_by_id($id)
	{
		
		 $this->db->from('events');
  $st="e_id='".$id."'";
  $this->db->where($st, NULL, FALSE);  
  $q = $this->db->get();  

  return $q;	
	
}


}
?>