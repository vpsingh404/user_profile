<?php
require_once 'connection.php';

session_start();

	if(isset($_GET['id'])){

			$id=$_GET['id'];

			if(isset($_POST['submit'])){

				$user=$_POST['user'];
				$pass=$_POST['pass'];
				$email=$_POST['email'];
				$address=$_POST['address'];
				$mob=$_POST['mob'];

				$ins= "UPDATE emp set user='$user', pass='$pass', email='$email', address='$address', mob='$mob' where id = '".$_SESSION['session_id']."'"; 
				mysqli_query($con, $ins);
				$_SESSION['session_user'] = $user;
				header('location:user_profile_new.php');

			}
	}
?>