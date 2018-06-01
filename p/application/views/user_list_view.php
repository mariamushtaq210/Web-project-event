<div class="user_list_main">

<br/>
<div class="container">
<b>User Name :</b>
<?php echo $row->firstname ?>
<br/>
<b>User Name : </b><?php echo $row->username ?>
<br/>
<b>Email :</b><?php echo $row->email ?>
<br/>
<b>Event Posted :</b><?php echo $row->no_event ?>
	<br/>
<?php 
if($type != "blocked")
	echo("<a href=".$this->config->item('base_url').'index.php/update_user_data_controller/blocked/'.$row->user_id.'/'.$type.">
	<button class='btn btn-warning btn-sm' >Block</button></a>");

?>


<?php if($type != "unblocked")
echo("<a href=".$this->config->item('base_url').'index.php/update_user_data_controller/unblocked/'.$row->user_id.'/'.$type.">
<button class='btn btn-success btn-sm' >Un Block</button></a>"); ?>



 </div>
</div>
