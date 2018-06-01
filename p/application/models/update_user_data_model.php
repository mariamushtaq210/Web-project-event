<?php
class update_user_data_model extends CI_MODEL
{
			

function blocked_user($id)
{
  $st="user_id='".$id."'";
  $this->db->where($st, NULL, FALSE);  
  $data=array('block'=>'1');
  $q = $this->db->update('user',$data);  
	return $q;	
	
}



	function unblocked_user($id)
{
		
		$st="user_id='".$id."'";
  $this->db->where($st, NULL, FALSE);  
  $data=array('block'=>'0');
  $q = $this->db->update('user',$data);  
	return $q;	
	 


return $q;	
	


}

}




?>