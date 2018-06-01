<?php

class wedding_event_controller extends CI_Controller {
public function index()
	{
		$this->load->view('template/header',array("title"=>"Wedding Event"));
		$this->load->view('wedding_event_view');
		$this->load->view('template/footer');
	}
}

?>