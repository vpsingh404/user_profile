<?php

require_once("connection.php");
//session_start();

 $path = "files/".$_SESSION['session_id']."/";
    

    if (file_exists($path) == false) {
    		echo '<img class="class_name" src="files/default/default.png" width="100%" height="100%" />';
    } 
    else 
    {
    	$find_sql="SELECT * from emp where id = '".$_SESSION['session_id']."'"; 
    	$run_query=mysqli_query($con, $find_sql);
    	$rsdata=mysqli_fetch_array($run_query);
    	@extract($rsdata);
    	//$file_name_s = 'uidoctor_logo.png';
    	$file_name_s = $user_pic_name;
			echo '<img src="', $path, '/', $file_name_s, '" width="100%" height="100%" />';
    }


?>