
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

<?php 

    if(!isset($_GET['id'])){
        //$id=$_GET['id'];
        // $_SESSION['session_id']=$id;
        // $_SESSION['session_user']=$user;
            
        $records="SELECT * from emp where id = '".$_SESSION['session_id']."'"; 
        $query1=mysqli_query($con, $records);
        $result=mysqli_fetch_array($query1);
        //@extract($result);

?>

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
        <form method="post" action="save_profile.php?id=<?php echo $result[0]; ?>">
            <div class="account block col-sm-12"> <!-- ACCOUNT (RIGHT-CONTAINER) -->
              <h2 class="titular">Account Details</h2>
              <div class="row">
                <div class="col-sm-3 pdlft3"><label>User Name</label></div>
                <div class="col-sm-8">
                  <input type="text" class="email text-input" name="user" value="<?php echo $result[1]; ?>">
                  <div class="input-icon envelope-icon-acount"><span class="fontawesome-envelope scnd-font-color"></span></div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3 pdlft3"><label>Password</label></div>
                <div class="col-sm-8">
                  <input type="text" class="password text-input" name="pass" value="<?php echo $result[2]; ?>">
                  <div class="input-icon password-icon"><span class="fontawesome-lock scnd-font-color"></span></div>
              </div>
              </div>
              <div class="row">
                <div class="col-sm-3 pdlft3"><label>Email</label></div>
                <div class="col-sm-8">
                  <input type="text" class="email text-input" name="email" value="<?php echo $result[3]; ?>">
                  <div class="input-icon envelope-icon-acount"><span class="fontawesome-envelope scnd-font-color"></span></div>
              </div>
              </div>
              <div class="row">
                <div class="col-sm-3 pdlft3"><label>Address</label></div>
                <div class="col-sm-8">
                  <input type="text" class="email text-input" name="address" value="<?php echo $result[4]; ?>">
                  <div class="input-icon envelope-icon-acount"><span class="fontawesome-envelope scnd-font-color"></span></div>
              </div>
              </div>
              <div class="row">
                <div class="col-sm-3 pdlft3"><label>Mobile</label></div>
                <div class="col-sm-8">
                  <input type="text" class="email text-input" name="mob" value="<?php echo $result[5]; ?>">
                  <div class="input-icon envelope-icon-acount"><span class="fontawesome-envelope scnd-font-color"></span></div>
              </div>
              </div>
              <input type ="submit" name="submit" value="Save" class="sign-in button" />
              <!-- <a href="58" class="fb-sign-in">
                <p><span class="fb-border"><span class="icon zocial-facebook"></span></span>
                   <a href="index.html" class="sign-in button">Save</a>
                </p>
              </a> -->
            </div>
        </form>
    </div>

  </div>
</div>
<?php
    }
?>
</body>
</html>