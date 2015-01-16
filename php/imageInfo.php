<?php

require_once("connection.php");
include "remove_directory.php";
session_start();



// Example of accessing data for a newly uploaded file
$fileName = $_FILES["myfile"]["name"]; 
$fileTmpLoc = $_FILES["myfile"]["tmp_name"];
// Path and file name
$path = "files/".$_SESSION['session_id']."/";

if (is_dir($path) === true) {
		Delete($path);
}

mkdir($path, 0777, true);
$pathAndName = $path.$fileName;
// Run the move_uploaded_file() function here
$moveResult = move_uploaded_file($fileTmpLoc, $pathAndName);
// Evaluate the value returned from the function if needed
if ($moveResult == true) {
    
    echo "File has been moved from " . $fileTmpLoc . " to" . $pathAndName;
    //find row of current_user by id
    
    $update_sql="UPDATE emp SET user_pic_name = '$fileName' where id = '".$_SESSION['session_id']."'"; 
    $run_query=mysqli_query($con, $update_sql);
    header("Location:user_profile_new.php");

} else {
    echo "ERROR: File not moved correctly";
}

?>