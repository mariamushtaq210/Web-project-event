<?php
class guideline_controller extends CI_CONTROLLER
{
	function index()
	{
		$this->load->view('template/header');
		$this->load->view('guideline_view');
		$this->load->view('template/footer');
		
	}
	
}


?>

