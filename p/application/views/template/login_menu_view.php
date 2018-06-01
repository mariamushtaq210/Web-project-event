<div id="login_menu_main_div">
<?php
if(isset($this->session->userdata['type']))
{
if($this->session->userdata['type']=="admin")
{
echo("<a href=".$this->config->item("base_url")."index.php/admin_event_controller/admin_menu"."><span class='col-lg-2 error'>Admin Menu</span><a><span class='col-lg-6'></span><span class='error'>Welcome,".$this->session->userdata['username']."<a href=".$this->config->item("base_url")."index.php/login_controller/logout".">(logout)</a></span>");	
}
elseif($this->session->userdata['type']=="user")
{
	echo("<span class='col-lg-8'></span><span class='error'>Welcome,".$this->session->userdata['username']."<a href=".$this->config->item("base_url")."index.php/login_controller/logout".">(logout)</a></span>");
}
}
else
echo("<span class='col-lg-10'></span><a href=".$this->config->item("base_url")."index.php/login_controller".">Login</a>");



?>
</div>