<div class="event_detail_div">
<br />
<img src="<?php echo $this->config->item('base_url')."uploads/".$image_name.$ext ?>" />

<div class="container">
<br />
<b>Event Name :</b>
<?php echo $e_name ?>
<br/>
<b>Category : </b><?php echo $e_category?>
<br/>
<b>Created by :</b><?php echo $user_name ?>
<br/>
<b>Posted at :</b><?php echo $Time_stamp?>
	<br/>

 <div class="event_btn">
 <a href="<?php echo($this->config->item('base_url')."index.php/join_controller/index/".$e_id) ?>" ><button type="button" class="btn btn-danger " >
  <span class="glyphicon glyphicon-pushpin" aria-hidden="true" ></span> &ensp;<b>Join</b> &ensp;
</button></a></div>
<br />

 </div>
 <br />

</div>
<br /><br /><br />

<div id="comments">

<?php
echo ("<h2>"."Recent Comments"."</h2>");

$this->load->view('add_comment_view');
?>

</div>


