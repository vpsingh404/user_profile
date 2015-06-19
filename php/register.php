<?php
  //session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>UserProfile</title>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<style type="text/css">
.mgbtm1{margin-bottom: 10px; overflow: hidden;}
.container{padding-top: 20px; margin: 0 auto;}
.red_asterisk{color: #ff0000;}
</style>
</head>

<body>

<div class="container" style="margin-top:30px;"> 
  <form action="models_data.php" method="post"> 
    <div class="col-sm-12">
      <div class="form-group">
        <div class="col-sm-3"><label>Choose Your Category:<span class="red_asterisk">*</span></label></div>
        <div class="col-sm-6">
          <select class="wid_5 select_fld" name="category" id="category">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Female Kid">Female Kid</option>
            <option value="Male Kid">Male Kid</option>
          </select>
        </div>
        <div class="col-sm-3"></div>
      </div>
      <div class="form-group">
        <div class="col-sm-3"><label>Email:<span class="red_asterisk">*</span></label></div>
        <div class="col-sm-6"><input type="text" class="form-control" placeholder="Search" name="email" autocomplete="on"></div>
        <div class="col-sm-3"></div>
      </div>
      <div class="form-group">
        <div class="col-sm-3"><label>First Name:<span class="red_asterisk">*</span></label></div>
        <div class="col-sm-6"><input type="text" class="form-control" placeholder="Search" name="firstname"></div>
        <div class="col-sm-3"></div>
      </div>
      <div class="form-group">
        <div class="col-sm-3"><label>Last Name:<span class="red_asterisk">*</span></label></div>
        <div class="col-sm-6"><input type="text" class="form-control" placeholder="Search" name="lastname"></div>
        <div class="col-sm-3"></div>
      </div>
      <div class="form-group">
        <div class="col-sm-3"><label>Password:<span class="red_asterisk">*</span></label></div>
        <div class="col-sm-6"><input type="text" class="form-control" placeholder="Search" name="password"></div>
        <div class="col-sm-3"></div>
      </div>
      <!-- <div class="form-group">
        <div class="col-sm-3"><label>Retype Password:<span class="red_asterisk">*</span></label></div>
        <div class="col-sm-6"><input type="text" class="form-control" placeholder="Search"></div>
        <div class="col-sm-3"></div>
      </div> -->
      <div class="form-group">
        <div class="col-sm-3"><label>Gender:<span class="red_asterisk">*</span></label></div>
        <div class="col-sm-6">
          <select class="wid_5 select_fld" name="gender" id="gender">
            <option selected="Selected">Select</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
        </div>
        <div class="col-sm-3"></div>
      </div>
      <div class="form-group">
        <div class="col-sm-3"><label>Date of Birth:<span class="red_asterisk">*</span></label></div>
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-4">
              <select class="wid_10 select_fld" name="month">
                <option value="">MM</option>
                <option value="">Jan</option>
                <option value="">Feb</option>
              </select>
            </div>
            <div class="col-sm-4">
              <select class="wid_10 select_fld" name="date">
                <option value="">DD</option>
                <option value="">01</option>
                <option value="">02</option>
              </select>
            </div>
            <div class="col-sm-4">
              <select class="wid_10 select_fld" name="year">
                <option value="">YYYY</option>
                <option value="">1990</option>
                <option value="">1991</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-sm-3"></div>
      </div>
      <div class="form-group">
        <div class="col-sm-3"><label>Address<span class="red_asterisk">*</span></label></div>
        <div class="col-sm-6"><input type="text" class="form-control" placeholder="Search" name="address"></div>
        <div class="col-sm-3"></div>
      </div>
      <div class="form-group">
        <div class="col-sm-3"><label>City<span class="red_asterisk">*</span></label></div>
        <div class="col-sm-6">
          <div class="wid_5">
            <select class="wid_10 select_fld" name="city" id="city">
              <option value="" selected="selected">Select</option>
              <option value="Pune">Pune</option>
              <option value="Delhi">Delhi</option>
              <option value="Mumbai">Mumbai</option>
            </select>
          </div>
        </div>
        <div class="col-sm-3"></div>
      </div>
      <div class="form-group">
        <div class="col-sm-3"><label>Country<span class="red_asterisk">*</span></label></div>
        <div class="col-sm-6">
          <div class="wid_5">
            <select class="wid_10 select_fld" name="country" id="country">
              <option value="" selected="selected">Select</option>
              <option value="India">India</option>
              <option value="Bhutan">Bhutan</option>
              <option value="Nepal">Nepal</option>
            </select>
          </div>
        </div>
        <div class="col-sm-3"></div>
      </div>
      <div class="form-group">
        <div class="col-sm-6 col-sm-offset-3">
          <button type="submit" class="btn btn-default">Submit</button>
        </div>
      </div>
    </div>
  </form>
</div>

</body>
</html>
