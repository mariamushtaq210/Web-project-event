<?php
class about_controller extends CI_CONTROLLER
{
	function index()
	{
		$this->load->view('template/header',array("title"=>"About"));
		$this->load->view('about_view');
		$this->load->view('template/footer');
		
	}
}

?>
