
<?php 
    require_once 'connection.php'; 

    session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>UserProfile</title>
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
        <form action="image_gallery.php" enctype="multipart/form-data" method="POST" >
        <div class="col-sm-12 mgbtm2"> <!-- ACCOUNT (RIGHT-CONTAINER) -->
          <div class="col-sm-4">
            <h2 class="titular mainH">Add Your Photos</h2>
          </div>
          <div id="gallery" class="col-sm-4">
            <p><input type="file" name="myfile[]" multiple="multiple"/></p>
          </div>
          <div class="col-sm-3">
            <button type="submit" class="btn btn-success dropdown-toggle" name="submit">Upload Files </button>
          </div>
        </div>
        </form>
        <div class="col-sm-12">
          <?php include "call_gallery.php"; ?>
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

      $( ".galThumnail" ).prepend( $( "<a class='remove' onClick='removeImg()'>X</a>" ) );

  });
</script>