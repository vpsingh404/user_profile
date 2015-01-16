<?php
session_start();
if($_SESSION['au']!=3)
{	/*echo "not a vallid id";*/
	include("login.php");
	exit();
}

//echo $_SESSION['session_id'];
//exit();

$con=mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("tempo");

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="main.css" type="text/css" rel="stylesheet" />
</head>

<body>
<table width="500" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#FFCC99">
  <tr>
    <td width="90" class="text1">&nbsp;</td>
    <td colspan="2" align="center" class="text1">Check your profile </td>
    <td width="118" class="text1">&nbsp;</td>
  </tr>
  <tr>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
  </tr>
  <tr>
    <td class="text1">&nbsp;</td>
    <td width="135" class="text1">Logged in as User:</td>
    <td width="131" class="text1"><?php echo $_SESSION['session_user']; ?></td>
    <td class="text1">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" class="text1">&nbsp;</td>
    <td align="center" class="text1">&nbsp;</td>
    <td align="center" class="text1">&nbsp;</td>
    <td align="center" class="text1">&nbsp;</td>
  <tr>
    <td align="center" class="text1"><a href="register.php">Register</a></td>
    <td align="center" class="text1"><a href="profile.php">Profile</a></td>
     <td align="center" class="text1"><a href="login.php">Login</a></td>
  <td align="center" class="text1"><a href="logout.php">Logout</a></td>
  <tr>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
  </tr>
  <tr>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
  </tr>
</table>
</body>
</html>
