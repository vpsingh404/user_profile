<?php

require_once("connection.php");
include "remove_directory.php";
//session_start();


$rs = "SELECT * from photos";
$result = mysqli_query($con, $rs);

//echo $result; die();
while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
	
	echo  "<a href='files/".$_SESSION['session_id']."/"."gallery/".$row['name']."' class='fancybox-effect-d'>"."<img src='files/".$_SESSION['session_id']."/"."gallery/".$row['name']."' class='im' />"."</a>";
}

//header("Location:user_gallery.php");



?>