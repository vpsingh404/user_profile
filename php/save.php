<?php
require_once 'connection.php';

	if(isset($_GET['id'])){

			$id=$_GET['id'];

			if(isset($_POST['submit'])){

				$user=$_POST['user'];
				$pass=$_POST['pass'];

				$ins= "UPDATE persons set user='$user', pass='$pass' where id='$id'";
				mysqli_query($con, $ins);
				header('location:user_profile.php');
				// if(mysqli_query($con, $ins)){
				// header('location:show_records.php');
				// 	}
			}
	}
?>

<?php
// require_once("connection.php");

// $user=$_POST['user'];
// $pass=$_POST['pass'];


// $ins="insert into persons(user,pass)values('".$user."','".$pass."')";
// mysqli_query($con,$ins);

// header("Location:show_records.html");



?>