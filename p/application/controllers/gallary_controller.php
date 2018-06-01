<?php
class gallary_controller extends CI_CONTROLLER
{
	function index()
	{
		$this->load->view('template/header');
		$this->load->view('gallary_view');
		$this->load->view('template/footer');
		
	}
	
}


?>



	
   
   
   
   
   
   