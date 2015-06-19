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





// if(isset($_FILES['submit'])){
//     //$errors= array();
//     //echo "hello"; die();
//     foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
//         $file_name = $key.$_FILES['files']['name'][$key];
//         $file_size =$_FILES['files']['size'][$key];
//         $file_tmp =$_FILES['files']['tmp_name'][$key];
//         $file_type=$_FILES['files']['type'][$key];  
//         if($file_size > 2097152){
//             $errors[]='File size must be less than 2 MB';
//         }       
//         $query="INSERT into photo (`p_id`,`p_img`) VALUES('".$_SESSION['session_id']."','$file_name'); ";

//         //$desired_dir="user_data";
//         $desired_dir = "files/".$_SESSION['session_id']."/"."gallery/";

//         if(empty($errors)==true){
//             if(is_dir($desired_dir)==false){
//                 mkdir($desired_dir, 0777, true);        // Create directory if it does not exist
//             }
//             if(is_dir("$desired_dir/".$file_name)==false){
//                 move_uploaded_file($file_tmp,"$desired_dir/".$file_name);
//             }else{                                  // rename the file if another one exist
//                 $new_dir="$desired_dir/".$file_name.time();
//                  rename($file_tmp,$new_dir) ;               
//             }
//          mysql_query($query);           
//         }else{
//                 print_r($errors);
//         }
//     }
//     if(empty($error)){
//         echo "Success";
//     }
// }

//header("Location:user_gallery.php");

?>