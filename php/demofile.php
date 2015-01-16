	
<?php
require_once("connection.php");

// Example of accessing data for a newly uploaded file
$fileName = $_FILES["myfile"]["name"]; 
$fileTmpLoc = $_FILES["myfile"]["tmp_name"];
// Path and file name
$pathAndName = "files/".$fileName;
// Run the move_uploaded_file() function here
$moveResult = move_uploaded_file($fileTmpLoc, $pathAndName);
// Evaluate the value returned from the function if needed
if ($moveResult == true) {
    
    echo "File has been moved from " . $fileTmpLoc . " to" . $pathAndName;
    header("Location:user_profile_new.php");

} else {
     echo "ERROR: File not moved correctly";
}
?>



	<?php
//require_once("connection.php");


// //echo $_FILES['photo']['size'];
// $name =  $_FILES['myfile']['name'];
// $type =  $_FILES['myfile']['type'];
// $size =  $_FILES['myfile']['size'];
// $temp = $_FILES['myfile']['tmp_name'];
// $error =  $_FILES['myfile']['error'];

// if ($error > 0){
// 	die("Error Uploading file! code $error.");
// }else{
// 	move_uploaded_file($temp, "/files/".$name);
// 	echo "Upload Complete";
// }

// die();


// $db = mysqli_select_db($con, "userdata" );

// if($_POST['submit']){
// 	$name = basename($_FILES['photo']['name']);
// 	$t_name = $_FILES['photo']['tmp_name'];
// 	$dir = 'files';

// 	if(move_uploaded_file($t_name, $dir)){
// 		echo "file uploaded";
// 	}else{
// 		echo "Upload Failed";
// 	}
// }












// $user=$_POST['user'];
// $pass=$_POST['pass'];

// $ins="INSERT into persons(user,pass)values('".$user."','".$pass."')";
// mysqli_query($con,$ins);

// header("Location:show_records.php");



?>