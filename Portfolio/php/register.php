<?php
  session_start();
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
  <form action="php/session.php" method="post"> 
    <div class="col-sm-12">
      <div class="form-group">
        <div class="col-sm-3"><label>Choose Your Category:<span class="red_asterisk">*</span></label></div>
        <div class="col-sm-6">
          <select class="wid_5">
            <option value="">Male</option>
            <option value="">Female</option>
            <option value="">Female Kid</option>
            <option value="">Male Kid</option>
          </select>
        </div>
        <div class="col-sm-3"></div>
      </div>
      <div class="form-group">
        <div class="col-sm-3"><label>Email:<span class="red_asterisk">*</span></label></div>
        <div class="col-sm-6"><input type="text" class="form-control" placeholder="Search"></div>
        <div class="col-sm-3"></div>
      </div>
      <div class="form-group">
        <div class="col-sm-3"><label>First Name:<span class="red_asterisk">*</span></label></div>
        <div class="col-sm-6"><input type="text" class="form-control" placeholder="Search"></div>
        <div class="col-sm-3"></div>
      </div>
      <div class="form-group">
        <div class="col-sm-3"><label>Last Name:<span class="red_asterisk">*</span></label></div>
        <div class="col-sm-6"><input type="text" class="form-control" placeholder="Search"></div>
        <div class="col-sm-3"></div>
      </div>
      <div class="form-group">
        <div class="col-sm-3"><label>Password:<span class="red_asterisk">*</span></label></div>
        <div class="col-sm-6"><input type="text" class="form-control" placeholder="Search"></div>
        <div class="col-sm-3"></div>
      </div>
      <div class="form-group">
        <div class="col-sm-3"><label>Retype Password:<span class="red_asterisk">*</span></label></div>
        <div class="col-sm-6"><input type="text" class="form-control" placeholder="Search"></div>
        <div class="col-sm-3"></div>
      </div>
      <div class="form-group">
        <div class="col-sm-3"><label>Gender:<span class="red_asterisk">*</span></label></div>
        <div class="col-sm-6">
          <select class="wid_5">
            <option value="">Select</option>
            <option value="">Male</option>
            <option value="">Female</option>
          </select>
        </div>
        <div class="col-sm-3"></div>
      </div>
      <div class="form-group">
        <div class="col-sm-3"><label>Date of Birth:<span class="red_asterisk">*</span></label></div>
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-4">
              <select class="wid_10">
                <option value="">MM</option>
                <option value="">Jan</option>
                <option value="">Feb</option>
              </select>
            </div>
            <div class="col-sm-4">
              <select class="wid_10">
                <option value="">DD</option>
                <option value="">01</option>
                <option value="">02</option>
              </select>
            </div>
            <div class="col-sm-4">
              <select class="wid_10">
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
        <div class="col-sm-6"><input type="text" class="form-control" placeholder="Search"></div>
        <div class="col-sm-3"></div>
      </div>
      <div class="form-group">
        <div class="col-sm-3"><label>City<span class="red_asterisk">*</span></label></div>
        <div class="col-sm-6">
          <div class="wid_5">
            <select class="wid_10">
              <option value="">Pune</option>
              <option value="" selected="selected">Delhi</option>
              <option value="">Mumbai</option>
            </select>
          </div>
        </div>
        <div class="col-sm-3"></div>
      </div>
      <div class="form-group">
        <div class="col-sm-3"><label>Country<span class="red_asterisk">*</span></label></div>
        <div class="col-sm-6">
          <div class="wid_5">
            <select class="wid_10">
              <option value="" selected="selected">India</option>
              <option value="">Bhutan</option>
              <option value="">Nepal</option>
            </select>
          </div>
        </div>
        <div class="col-sm-3"></div>
      </div>
      <div class="form-group">
        <div class="col-sm-6 col-sm-offset-3">
          <button type="button" class="btn btn-default dropdown-toggle">Submit</button>
        </div>
      </div>
    </div>
  </form>
</div>

</body>
</html>
