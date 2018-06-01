
<div class="container panel panel-default" id="admin_login">
 <div class="error"><?php if(isset($message)) echo($message);else echo(""); ?></div>

  <h2>Admin Login</h2>
  
  <form class="form-horizontal" role="form" action="<?php echo $this->config->item('base_url')."/index.php/login_controller/admin_login_validate"?>" method="post">
   			<span class="col-lg-2"></span>
            <span class="col-lg-8">
            <input type="text" class="form-control input-lg" id="username" name="username"  placeholder="Username"> 
        <input type="password" class="form-control input-lg" id="password" name="password" placeholder="Password">
    <br/>
      <button class="btn btn_colour" type="submit">Login</button>
      <button class="btn  btn_colour" type="reset">Reset</button> 
     <br/><br/>  
     </span>  
  </form>
</div>


