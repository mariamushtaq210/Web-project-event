<?php
class contact_controller extends CI_CONTROLLER
{
	function index()
	{
		$this->load->view('template/header');
		$this->load->view('contact_view');
		$this->load->view('template/footer');
	}
}

?>
