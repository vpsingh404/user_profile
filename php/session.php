<?php

require_once("connection.php");

session_start();


if(isset($_POST['submit']))
{
 $user=$_POST['user'];
 $pass=$_POST['pass'];
 
 $sql="SELECT * from emp where user='".$user."' and pass='".$pass."'";  
 $rs=mysqli_query($con, $sql);
 
 if(mysqli_num_rows($rs)>0)
 {
   $rsdata=mysqli_fetch_array($rs);
   @extract($rsdata);

   $_SESSION['session_id']=$id;
   $_SESSION['session_user']=$user;
   //echo ('hello');
   header("Location:user_profile_new.php");
 }
 else{
 	echo "user or pass not matching please try again";
 }
}
?>


