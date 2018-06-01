<?php
class login_controller extends CI_CONTROLLER
{
	function index()
	{
		$this->load->view('template/header',array("title"=>"Login Menu"));
		$this->load->view('event_pg_view',array("heading"=>"Login Menu"));
		$this->load->view('login_view');
		$this->load->view('template/footer');
	}
	function admin_login()
	{
		$this->load->view('template/header',array("title"=>"Admin Login"));
		$this->load->view('admin_login_view');
		$this->load->view('template/footer');
		
	}
	function user_login()
	{
		$this->load->view('template/header',array("title"=>"User Login"));
		$this->load->view('user_login_view');
		$this->load->view('template/footer');
		
	}
	function admin_login_validate()
	{
		$this->load->model("login_model");				
		if($p=$this->login_model->validate_admin())
		{
			
			$data = array("type"=>"admin","id"=>$p[0]->id,"username"=>strtoupper($p[0]->name));
			$this->session->set_userdata($data);
		$this->load->view("template/header",array("title"=>"Home"));
		$this->load->view("admin_menu_view");
		$this->load->view("template/footer");

		}
		else
		{
			
			$this->load->view("template/header",array("title"=>"Admin Login"));
			
			$this->load->view("admin_login_view",array("message"=>"Invalid Username or Password"));

			$this->load->view("template/footer");
		}
		
		
	}
	function user_login_validate()
	{
		$this->load->model("login_model");				
		if($p=$this->login_model->validate_user())
		{
			
			$data = array("type"=>"user","id"=>$p[0]->user_id,"username"=>strtoupper($p[0]->username));
			$this->session->set_userdata($data);
		$this->load->view("template/header",array("title"=>"Home"));
		$this->load->view("home_view");
		$this->load->view("template/footer");

		}
		else
		{
			
			$this->load->view("template/header",array("title"=>"User Login"));
			
			$this->load->view("user_login_view",array("message"=>"Invalid Username or Password"));

			$this->load->view("template/footer");
		}
		
		
	}	
	function logout()
	{
		$this->session->sess_destroy();	
		$this->load->view("template/header",array("title"=>"Home"));
		$this->load->view("home_view");
		
			$this->load->view("template/footer");
	}
	
	function register()
	{
			$this->load->view("template/header",array("title"=>"Home"));
		$this->load->view("register_view");
		
			$this->load->view("template/footer");
	}
	
	
	function register_validate()
	{
		
		$this->load->model("login_model");
		$this->load->view("template/header",array("title"=>"Register"));
		$this->form_validation->set_rules('firstname','First Name');
		$this->form_validation->set_rules('lastname','Last Name');
		$this->form_validation->set_rules('username','Username','trim|is_unique[user.username]');
		$this->form_validation->set_rules('email','Email','trim|is_unique[user.email]');
		$this->form_validation->set_rules('password','Password','min_length[5]|matches[confirmpassword]');
		$this->form_validation->set_rules('confirmpassword','Confirm Password','min_length[5]');
		if($this->form_validation->run())
		{
			if( $this->login_model->insert_data() )
			{
					$this->load->view("user_login_view",array("message"=>"You Are Successfully Registered Please Login"));
			}
			else
			{
				echo("Insertion Error");
			}
		}
		else
		$this->load->view("register_view");
		
		$this->load->view("template/footer");
	}
	
	
}

?>