<?php
class update_data_controller extends CI_CONTROLLER
{
	function index($id,$type)
	{
	
		$this->load->model('update_data_model');
		$this->update_data_model->update_event($id);
		redirect($this->config->item('base_url')."index.php/admin_event_controller/".$type."_event_list");
	}
	function delete($id,$type)
	{
		$this->load->model('update_data_model');
		$this->update_data_model->delete_event($id);
			redirect($this->config->item('base_url')."index.php/admin_event_controller/".$type."_event_list");
	}
	function reject($id,$type)
	{
		$this->load->model('update_data_model');
		$this->update_data_model->reject_event($id);
				redirect($this->config->item('base_url')."index.php/admin_event_controller/".$type."_event_list");
	
	}
	
	
	
	
}

?>