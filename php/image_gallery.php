<?php

require_once("connection.php");
//include "remove_directory.php";
session_start();

if(isset($_POST['submit'])){
	//$nm = $_POST['nm'];
	$errors= array();
//echo "hello"; die();
	foreach ($_FILES['myfile']['tmp_name'] as $key => $tmp_name) {
		if(!empty($_FILES['myfile']['tmp_name'][$key])){
			$uid = $_SESSION['session_id'];
			$name = $_FILES['myfile']['name'][$key];
			$tmpnm = $_FILES['myfile']['tmp_name'][$key];
			$type = $_FILES['myfile']['type'][$key];
			$size = $_FILES['myfile']['size'][$key];
		}
		 // echo '$uid'; die();

		$desired_dir = "files/".$_SESSION['session_id']."/"."gallery/";

		if(is_dir($desired_dir)==false){
        mkdir($desired_dir, 0777, true);        // Create directory if it does not exist
    }

    $move_result = move_uploaded_file($tmpnm, "$desired_dir/".$name);

    if ($move_result == true) {

    		 $ins = "INSERT INTO photos (uid, name, type, size) values ( '$uid', '$name', '$type', '$size' )";
    	
    		 $run_query = mysqli_query($con, $ins);

    	}else{
    	  echo "<script>alert('New File Uploaded')</script>";
    }


	}
	  
}
header("Location:user_gallery.php");

?>