<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>File Upload System</title>

<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<!-- <link rel="stylesheet" type="text/css" href="../css/style.css"> -->
</head>
<body>
<div class="container">

<div id="picid" class="col-sm-3 ">
  <form action="demofile.php" enctype="multipart/form-data" method="POST" style="margin-top:40px;">
    <p>
        <label>Select Photo 
            <input name="MAX_FILE_SIZE" value="102400" type="hidden">
            <input type="file" name="myfile">
        </label>
    </p>
    <p><input type="submit" class="sign-in button" value="Save" name="submit"></p>
  </form>
</div>

</div> <!-- end main-container -->
</body>
