<?php
class add_event_controller extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('add_event_model');
	}
	function index()
	{
		
			$data['title']="Add Event";
			$this->load->view('template/header',$data);

		if(isset($this->session->userdata["type"]))
		{
			$this->load->view('add_event_view', array('error' => ' ' ));
		}
		else
		{
			$this->load->view('add_event_fail_view', array('error' => ' ' ));
		}
		$this->load->view('template/footer');
		
	}
	function do_upload()
	{
		if($this->input->post('upload'))
		{
			$config['upload_path'] = './uploads';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']    = '10000000999999999';
			$config['max_width']  = '99999999999999999';
			$config['max_height']  = '9999999999999999';
			$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload())
		{
			echo($this->upload->display_errors()."sad");
		}
		else
		{
			$data=$this->upload->data();
		//	$this->thumb($data);
		
		
			$file=array(
			'e_name'=>$this->input->post('e_name'),
			'e_address'=>$this->input->post('e_address'),
			'e_city'=>$this->input->post('e_city'),
			'e_category'=>$this->input->post('e_category'),
			'e_contact'=>$this->input->post('e_contact'),
			'e_date'=>date("Y-m-d",strtotime($this->input->post('e_date'))),
			'e_time'=>$this->input->post('e_time'),
			'e_request'=>'PENDING',
			'e_managedby'=>$this->input->post('e_managedby'),
			'user_id'=>$this->session->userdata['id'],
			'user_name'=>$this->session->userdata['username'],
			
			
			'image_name'=>$data['raw_name'],
			//'thumb_name'=>$data['raw_name'].'_thumb',
			'ext'=>$data['file_ext'],
			//'upload_date'=>time()
			);
				$this->add_event_model->add_image($file);
		
		
		
		
				//$data = array('upload_data' => $this->upload->data());
				$this->load->view('template/header', $data);
				$this->load->view('event_success', $data);
				$this->load->view('template/footer', $data);
			}
		}
		else
		{
			redirect(site_url('upload'));
		}
	}
	
	
	
	
	
	
	function thumb($data)
	{
		$config['image_library'] = 'gd2';
		$config['source_image'] =$data['full_path'];
		$config['create_thumb'] = TRUE;
		$config['maintain_ratio'] = TRUE;
		$config['width'] = 275;
		$config['height'] = 250;
		$this->load->library('image_lib', $config);
		$this->image_lib->resize();
	}
}
