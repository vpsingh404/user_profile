
<?php 
    require_once 'connection.php'; 
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>UserProfile</title>

<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

<div class="container">

  <!-- HEADER -->
  <header class="block">
    <?php include "header.php"; ?>
  </header>
  <!-- LEFT-CONTAINER -->
  <div class="row">
    <div class="col-sm-3">
      <?php include "left_part.php"; ?>
    </div>

    <!-- MIDDLE-CONTAINER -->
    <div class="col-sm-9">
        <div class="account block col-sm-12" style="padding:25px 10px;">
            <?php include "call_gallery.php"; ?>
        </div>
        <div class="account block col-sm-12"> <!-- ACCOUNT (RIGHT-CONTAINER) -->
          <h2 class="titular">Add Your Photos</h2>
          <div id="gallery" class="col-sm-12">
            <form action="image_gallery.php" enctype="multipart/form-data" method="POST" >
              <p>
                <label>Select Photo 
                    <!-- <input name="MAX_FILE_SIZE" value="102400" type="hidden"> -->
                    <input type="file" name="myfile[]" multiple="multiple"/>
                    <!-- <input type="text" name="nm"/> -->
                </label>
              </p>
              <p><input type="submit" class="sign-in button" value="Upload Files" name="submit"></p>
            </form>
          </div>
        </div>
    </div>

  </div>
</div>

</body>
</html>

<script>
  $(document).ready(function(){
      $(".fancybox-effect-d").fancybox({

        openEffect : 'elastic',
        openSpeed : '300',

        closeEffect : 'elastic',
        closeSpeed : '250',

        closeClick : true

      });
  });
</script>