<?php
class delete_data_model extends CI_MODEL
{
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