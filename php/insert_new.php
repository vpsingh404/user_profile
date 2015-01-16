<?php

require_once("connection.php");
session_start();


$user=$_POST['user'];
$pass=$_POST['pass'];
$email=$_POST['email'];
$address=$_POST['address'];
$mob=$_POST['mob'];


$ins="INSERT into emp (user,pass,email,address,mob)values('".$user."','".$pass."','".$email."','".$address."','".$mob."')";

mysqli_query($con, $ins);
 

$query1="SELECT * from emp WHERE id = '".$user."'";  
$rs=mysqli_query($con, $query1) or die(mysqli_error());

while($rsdata=mysqli_fetch_array($rs))
{
	@extract($rsdata);
	$_SESSION['session_id']= $rsdata[0];
	$_SESSION['session_user']=$rsdata[1];

	

}


	header("Location:user_profile_new.php");


	
   
   

?>
