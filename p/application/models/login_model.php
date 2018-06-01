<?php
class login_model extends CI_MODEL
{
function insert_data()
{
	$data=array("firstname"=>$this->input->post('firstname'),
	"lastname"=>$this->input->post('lastname'),
	"password"=> $this->input->post('password'),
	"username"=>$this->input->post('username'),
	"email"=>$this->input->post('email'),
	"gender"=>$this->input->post('gender'),
	"city"=>$this->input->post('city') );	
	if($this->db->insert('user',$data))
	{
		return true;
	}
	return false;
	
	
}
function validate_admin()
{
	$this->db->where("name",$this->input->post('username'));
	$this->db->where("password",$this->input->post('password'));
	$this->db->from("admin");
	$r=$this->db->get();
	return $r->result();
}

function validate_user()
{
	$this->db->where("username",$this->input->post('username'));
	$this->db->where("password",$this->input->post('password'));
	$this->db->where("block","0");
	$this->db->from("user");
	$r=$this->db->get();
	return $r->result();
}




function list_data()
{
	return $this->db->get('student')->result();
	 
}

}
?>