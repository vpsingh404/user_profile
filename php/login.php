<?php

session_start();
require_once("../config/connection.php");

// $_SESSION['session_user']='';
// $_SESSION['session_id']='';
// $_SESSION['au']=0;
if(isset($_POST['submit']))
{
 $user=$_POST['user'];
 $pass=$_POST['pass'];
 
 $sql="SELECT * from persons where user='".$user."' and pass='".$pass."'";  
 $rs=mysqli_query($con, $sql);
 
	 if(mysqli_num_rows($rs)>0)
	 {
	   $rsdata=mysqli_fetch_array($rs);
	   @extract($rsdata);
	   // $_SESSION['session_id']=$id;
	   // $_SESSION['session_user']=$user;
	   // $_SESSION['au']=3;
	   header("Location:show_records.php");
	 }else{
	 	echo "User or Pass not matching";
	 }
}

?>

<?php
// ob_start();
// session_start();

// require_once("connection.php");

// $username = $_POST['user'];
// $password = $_POST['pass'];
 
 
// $username = mysqli_real_escape_string($username);
// $query = "SELECT user, pass FROM persons WHERE user = '$username';";
 
// $result = mysqli_query($query);
 
// if(mysqli_num_rows($result) == 0) // User not found. So, redirect to login_form again.
// {
//     header('Location: index.html');
// }
 
// $userData = mysqli_fetch_array($result, MYSQL_ASSOC);
// $hash = hash('sha256', $userData['salt'] . hash('sha256', $password) );
 
// if($hash != $userData['password']) // Incorrect password. So, redirect to login_form again.
// {
//     header('Location: login.html');
// }else{ // Redirect to home page after successful login.
// 	session_regenerate_id();
// 	$_SESSION['sess_user_id'] = $userData['id'];
// 	$_SESSION['sess_username'] = $userData['user'];
// 	session_write_close();
// 	header('Location: show_records.php');
// }
?>