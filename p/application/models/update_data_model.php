<?php
class update_data_model extends CI_MODEL
{
	function update_event($id)
	{
  $st="e_id='".$id."'";
  $this->db->where($st, NULL, FALSE);  
  $data=array('e_request'=>'ACCEPTED');
  $q = $this->db->update('events',$data);  


return $q;	
	
}

function reject_event($id)
{
  $st="e_id='".$id."'";
  $this->db->where($st, NULL, FALSE);  
  $data=array('e_request'=>'REJECTED');
  $q = $this->db->update('events',$data);  
	return $q;	
	
}



	function delete_event($id)
	{
		
		 $this->db->from('events');
  $st="e_id='".$id."'";
  $this->db->where($st, NULL, FALSE);  
  $q = $this->db->delete();  


return $q;	
	


}


}





?>