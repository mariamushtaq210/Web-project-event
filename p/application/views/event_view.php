<div class="admin_event_main">
<a href="<?php echo $this->config->item('base_url')."index.php/event_controller/event_detail/".$e_id ?>">
<img src=<?php echo $this->config->item('base_url')."uploads/".$image_name.$ext ?> class="admin_event_image" >
<br/>
<div class="container">
<b>Event Name :</b>
<?php echo $e_name ?>
<br/>
<b>Category : </b><?php echo $e_category?>
<br/>
<b>Created by :</b><?php echo $user_name ?>
<br/>
<b>Posted at :</b><?php echo $Time_stamp?>
	<br/>
<?php


 ?>
 
 </div>
 </a>
</div>
