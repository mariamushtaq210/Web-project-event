<form method="post" action="<?php echo $this->config->item('base_url').'index.php/comment_controller' ?> ">
  <div class="form-group has-feedback col-lg-12">
    <?php
if(isset($this->session->userdata['id']))

echo('

      <label class="control-label">Comment Here :</label><br />
      <div class="col-sm-8">
        <textarea class="col-lg-8  input-sm" id="comment" name="comment" placeholder="Comment"  required></textarea>
     	<input type="hidden" name="e_id" value="'.$e_id.'" />
   <p class="home_text_center">
<button type="submit" class="btn btn-success home_btn" >
  <span class="glyphicon glyphicon-pushpin" aria-hidden="true" ></span> &ensp;Add Comment
</button>
</p>
	  </div>
');
?>
  </div>
</form>
