<div class="container-fluid">
<?php echo $error;?>
 
<?php echo form_open_multipart('add_event_controller/do_upload');?>
   <h2>Event Registration Form</h2>
  <hr/>
  <form class="form-horizontal" role="form" accept="image/gif,image/jpeg">

    <div class="form-group has-feedback col-lg-12">
      <label class="col-sm-4 control-label">Event Name :</label>
      <div class="col-sm-8">
        <input type="text" class="col-lg-8  input-sm" id="e_name" name="e_name" placeholder="Event Name"  required />
	
    
            
      </div>
    </div>
     <div class="form-group has-feedback col-lg-12">
      <label class="col-sm-4 control-label">Event Address :</label>
      <div class="col-sm-8">
        <input type="text" class="col-lg-8  input-sm" id="e_address" name="e_address" placeholder="Event Address"  required />
        
      </div>
    </div>
    
    
    
    <div class="form-group has-feedback col-lg-12">
      <label class="col-sm-4 control-label">Event Managed By :</label>
      <div class="col-sm-8">
        <input type="text" class="col-lg-8  input-sm" id="e_managedby" name="e_managedby" placeholder="Event Managed By"  required />
        
      </div>
    </div>
    
    
     <div class="form-group has-feedback col-lg-12">
      <label class="col-sm-4 control-label">Contact :</label>
      <div class="col-sm-8">
        <input type="text" class="col-lg-8  input-sm" id="e_contact" name="e_contact" placeholder="Contact"  required />
        
      </div>
    </div>
    
    
    	<div class="form-group has-feedback col-lg-12">
<label class="col-sm-4 control-label">Event City : </label>
<div class="col-sm-8 ">
<select class="input-sm" id="e_city" name="e_city">
<option selected>Select</option>
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

	

        
   <div class="form-group has-feedback col-lg-12">
      <label class="col-sm-4 control-label">Description :</label>
      <div class="col-sm-8">
        <textarea class="col-lg-8  input-sm" id="e_description" name="e_description" placeholder="Event's desctription"  required></textarea>
      </div>
    </div>   

 
 

<div class="form-group has-feedback col-lg-12">
      <label class="col-sm-4 control-label">Event Time  :</label>
      <div class="col-sm-8">
        <input type="time" class="col-lg-8  input-sm" id="e_time" name="e_time" placeholder="Event's Time"  required>
      </div>
    </div> 
    <div class="form-group has-feedback col-lg-12">
      <label class="col-sm-4 control-label">Event Date  :</label>
      <div class="col-sm-8">
        <input type="date" class="col-lg-8  input-sm" id="e_date" name="e_date" placeholder="Event's Date"  required>
      </div>
    </div> 
    <div class="form-group has-feedback col-lg-12">
      <label class="col-sm-4 control-label">Event Category  :</label>
      <div class="col-sm-8 ">
<select class="input-sm" id="e_category" name="e_category">
<option selected>Select</option>
<option value="Indoor">Indoor</option>
<option value="Outdoor">Outdoor</option>
<option value="Others">Others</option>

</select>
</div>  
      </div> 

 
<input type="file" name="userfile" class="input-lg" size="20" required="required" />
 
<br /><br />
 
<input type="submit" value="submit" class="btn" name="upload" />
 
</form>
 </div>