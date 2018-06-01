<?php
class update_user_data_controller extends CI_CONTROLLER
{
	function blocked($id,$type)
	{
		$this->load->model('update_user_data_model');
		$this->update_user_data_model->blocked_user($id);
			redirect($this->config->item('base_url')."index.php/user_list_controller/".$type."_user_list");
	}
	function unblocked($id,$type)
	{
		$this->load->model('update_user_data_model');
		$this->update_user_data_model->unblocked_user($id);
				redirect($this->config->item('base_url')."index.php/user_list_controller/".$type."_user_list");
	
	}
	
	
	
	
}

?>