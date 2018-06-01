<div class="container panel panel-default " id="register">
 <?php echo validation_errors("<p class='error'></p>") ?>
  <h2>Register Yourself</h2>
  <hr/>
  <form class="form-horizontal" role="form" method="post" action="<?php echo $this->config->item("base_url")."index.php/login_controller/register_validate"?>">
    <div class="form-group has-feedback col-lg-12">
      <label class="col-sm-4 control-label">First Name :</label>
      <div class="col-sm-8">
        <input type="text" class="col-lg-8 input-sm" id="firstname" value="<?php echo set_value('firstname','') ?>" name="firstname" placeholder="First Name"   required />
      </div>
    </div>
    <div class="form-group has-feedback col-lg-12">
      <label class="col-sm-4 control-label">Last Name :</label>
      <div class="col-sm-8">
        <input type="text" class="col-lg-8  input-sm" id="lastname" value="<?php echo set_value('lastname','') ?>" name="lastname" placeholder="Last Name"  required />
      </div>
    </div>
    <div class="form-group has-feedback col-lg-12">
      <label class="col-sm-4 control-label">Username :</label>
      <div class="col-sm-8">
        <input type="text" class="col-lg-8  input-sm" id="username" value="<?php echo set_value('username','') ?>" name="username"  placeholder="Username"/>
      </div>
    </div>
    <div class="form-group has-feedback col-lg-12">
      <label class="col-sm-4 control-label">Email :</label>
      <div class="col-sm-8">
        <input type="text" class="col-lg-8  input-sm" id="email" value="<?php echo set_value('email','') ?>" name="email" placeholder="Email" required>
      </div>
    </div>
    <div class="form-group has-feedback col-lg-12">
      <label class="col-sm-4 control-label">Password :</label>
      <div class="col-sm-8">
        <input type="text" class="col-lg-8  input-sm" id="password"  name="password" placeholder="Password"  required>
      </div>
    </div>
    <div class="form-group has-feedback col-lg-12">
      <label class="col-sm-4 control-label">Confirm Password :</label>
      <div class="col-sm-8">
        <input type="text" class="col-lg-8  input-sm" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password"  required>
      </div>
    </div>
    
    <div class="form-group has-feedback col-lg-12">
      <label class="col-sm-4 control-label ">Gender :</label>
      <div class="col-sm-8">
        <select class="input-sm form-group" value="<?php echo set_value('gender','') ?>" id="gender" name="gender" required>
          <option value="">Gender</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
      </div>

      <label class="col-sm-4 control-label">City:</label>
      <div class="col-sm-7 ">
        <select class="input-sm" id="city" value="<?php echo set_value('city','') ?>" name="city" required>
          <option value="">Select</option>
          <option value="Karachi">Karachi</option>
          <option value="Lahore">Lahore</option>
          <option value="Faisalabad">Faisalabad</option>
          <option value="Rawalpindi">Rawalpindi</option>
          <option value="Multan">Multan</option>
          <option value="Hyderabad">Hyderabad</option>
          <option value="Gujranwala">Gujranwala</option>
          <option value="Peshawar">Peshawar</option>
          <option value="Quetta">Quetta</option>
          <option value="Islamabad">Islamabad</option>
          <option value="Sargodha">Sargodha</option>
          <option value="Sialkot">Sialkot</option>
          <option value="Bahawalpur">Bahawalpur</option>
          <option value="Sukkar">Sukkar</option>
          <option value="Jhang">Jhang</option>
          <option value="Sheikhupura">Sheikhupura</option>
          <option value="Larkana">Larkana</option>
          <option value="Gujrat">Gujrat</option>
          <option value="Mardan">Mardan</option>
          <option value="Kasur">Kasur</option>
          <option value="Rahim yar khan">Rahim Yar Khan</option>
          <option value="Sahiwal">Sahiwal</option>
          <option value="Okara">Okara</option>
        </select>
      </div>
    </div>
    
    
    <span class="col-lg-7"> </span>
    <button type="submit" class="btn-default btn btn-success" >Submit</button>
    <button type="reset" class="btn-default btn btn-danger" >Reset</button>
  </form>
  
</div>
