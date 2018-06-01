<?php
class join_controller extends CI_CONTROLLER
{
	function index($id)
	{
		$this->load->model("join_model");
		
		$this->join_model->insert($id,$this->session->userdata('id'));
	}
	
	
	
}



?>