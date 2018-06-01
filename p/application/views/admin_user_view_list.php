<br />
<div class="container">
<span class="col-lg-1"></span>
<div class="col-md-3">
      <div class="thumbnail"><a href="<?php echo 
	  ($this->config->item('base_url').'index.php/user_list_controller/blocked_user_list') ?>" > <img src=<?php echo($this->config->item('base_url')."images/user_list.png"); ?> /></a>
        <div class="login_caption">
          <h4>Block List Users</h4>
        </div>
      </div>
    </div>
<span class="col-lg-1"></span>
<div class="col-md-3">
      <div class="thumbnail"><a href="<?php echo($this->config->base_url().'index.php/user_list_controller/unblocked_user_list') ?>" >
       <img src=<?php echo($this->config->item('base_url')."images/all_user_list.ico"); ?> /></a>
        <div class="login_caption">
          <h4>All User List</h4>
        </div>
      </div>
    </div>

</div>