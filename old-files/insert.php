<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$user=$_POST['user'];
$pass=$_POST['pass'];
$pass1=$_POST['pass1'];
$email=$_POST['email'];
$address=$_POST['address'];
$mob=$_POST['mob'];
$city=$_POST['city'];
$country=$_POST['country'];
$ugcourse=$_POST['ugcourse'];
$pgcourse=$_POST['pgcourse'];

$con=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("tempo");

$ins="insert into emp(user,pass,pass1,email,address,mob,city,country,ugcourse,pgcourse)values('".$user."','".$pass."','".$pass1."','".$email."','".$address."','".$mob."','".$city."','".$country."','".$ugcourse."','".$pgcourse."')";
echo $ins;
//die();
mysql_query($ins);
header("Location:register.php?str=Your data inserted succesfully");



?>
</body>
</html>
