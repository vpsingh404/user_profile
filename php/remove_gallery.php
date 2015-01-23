<?php

function removeImg(){

	if(isset($_POST['submit'])){
	// //echo "hello"; die();
		$uid = $_SESSION['session_id'];
				$name = $_FILES['myfile']['name'];
				$tmpnm = $_FILES['myfile']['tmp_name'];
				$type = $_FILES['myfile']['type'];
				$size = $_FILES['myfile']['size'];


		// foreach ($_FILES['myfile']['tmp_name'] as $key => $tmp_name) {
		// 	if(!empty($_FILES['myfile']['tmp_name'][$key])){
		// 		$uid = $_SESSION['session_id'];
		// 		$name = $_FILES['myfile']['name'][$key];
		// 		$tmpnm = $_FILES['myfile']['tmp_name'][$key];
		// 		$type = $_FILES['myfile']['type'][$key];
		// 		$size = $_FILES['myfile']['size'][$key];
		// 	}
			 // echo '$uid'; die();

			$remove_dir = "files/".$_SESSION['session_id']."/"."gallery/".$name;

			if(is_dir($remove_dir)==true){
	        rmdir($remove_dir, 0777, true);        // Create directory if it does not exist
	    }

	    $ins = "DELETE from photos where uid = '$uid' ";
	    $run_query = mysqli_query($con, $ins);
	    header("Location:user_gallery.php");
		}  
}


?>


