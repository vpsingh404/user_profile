	<?php
require_once("../config/connection.php");

$user=$_POST['user'];
$pass=$_POST['pass'];

$ins="INSERT into persons(user,pass)values('".$user."','".$pass."')";
mysqli_query($con,$ins);

header("Location:show_records.php");



?>