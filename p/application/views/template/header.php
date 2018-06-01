<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title><?php echo($title);?></title>
<link href=<?php echo ($this->config->item('base_url').$this->config->item('css'));?> rel="stylesheet">

<!-- Bootstrap -->

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php $this->load->view("template/login_menu_view")?>
  <div class="container-fluid header_div_1">
   <span class="col-lg-1"></span><span class="col-lg-3"><a href=<?php echo $this->config->item('base_url')."index.php/home_controller" ?> >
  <img src=<?php echo($this->config->item('base_url')."images/logo-f.jpg"); ?> /></a></span><br>
    <span class=" col-lg-3 navbar-collapse collapse">
      <ul class="navbar-nav nav  ">
        <li><a href=<?php echo ($this->config->item('base_url').'index.php/about_controller')?> >About</a></li>
        <li><a href=<?php 
			 echo $this->config->item('base_url').'index.php/event_controller'; 
		?>>Events</a> </li>
        <li><a href=<?php echo $this->config->item('base_url').'index.php/add_event_controller' ?> >Add Event</a> </li>
        <li><a href=<?php echo ($this->config->item('base_url').'index.php/gallary_controller')?> >Gallery</a> </li>
        <li><a href=<?php echo ($this->config->item('base_url').'index.php/guideline_controller')?> >Guidlines</a> </li>
        <li><a  href=<?php echo ($this->config->item('base_url').'index.php/contact_controller')?> >Contact Us</a> </li>
        <li role="presentation" class="dropdown-toggle"> <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Services<span class="caret"></span> </a>
          <ul id="header_drop" class="dropdown-menu ">
            <li><a href=<?php echo $this->config->item('base_url').'index.php/birthday_event_controller' ?>>Birthday Services</a></li>
            <li><a href=<?php echo $this->config->item('base_url').'index.php/wedding_event_controller' ?>>Wedding Serivices</a></li>
            <li><a href=<?php echo $this->config->item('base_url').'index.php/other_event_controller' ?>>Other Serivices</a></li>
          </ul>
          </li>
      </ul>
   </span>
  </div>

