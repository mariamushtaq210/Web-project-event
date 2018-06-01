<div class="admin_event_main">
<img src=<?php echo $this->config->item('base_url')."uploads/".$row->image_name.$row->ext ?> class="admin_event_image" >
<br/>
<div class="container">
<b>Event Name :</b>
<?php echo $row->e_name ?>
<br/>
<b>Category : </b><?php echo $row->e_category?>
<br/>
<b>Created by :</b><?php echo $row->user_name ?>
<br/>
<b>Posted at :</b><?php echo $row->Time_stamp?>
	<br/>
<?php if($type != "accepted")echo("<a href=".$this->config->item('base_url').'index.php/update_data_controller/index/'.$row->e_id.'/'.$type.">
<button class='btn btn-success btn-sm' >Accept</button></a>"); ?>


<?php if($type != "rejected")echo("<a href=".$this->config->item('base_url').'index.php/update_data_controller/reject/'.$row->e_id.'/'.$type.">
<button class='btn btn-warning btn-sm' >Reject</button></a>"); ?>


<?php if($type != "pending")echo("<a href=".$this->config->item('base_url').'index.php/update_data_controller/delete/'.$row->e_id.'/'.$type.">
<button class='btn btn-danger btn-sm' >Delete</button></a>"); ?>

 </div>
</div>
