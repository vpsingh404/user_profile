<?php
session_start();
if($_SESSION['au']!=3)
{	echo "not a vallid id";
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
<body style="margin-top:150px;">
<?php

    $id=$_GET['id'];
	$con=mysql_connect("localhost","root","") or die (mysql_error());
	mysql_select_db("tempo");
	
	$query="select * from emp where id='".$id."'";
	$rs=mysql_query($query) or die(mysql_error());
	$rsdata=mysql_fetch_array($rs) or die(mysql_error());
	@extract($rsdata);
?>
<form action="update1.php" method="POST">
<table width="500" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#FFCC99">
  <tr>
    <td class="text1">&nbsp;</td>
   <td colspan="2" align="center" class="text1">Check your profile </td>
   <td width="118" align="center" class="text1"><a href="logout.php">Logout</a></td>
  </tr>
  <tr>
    <td class="text1">&nbsp;</td>
    <td class="text1">welcome to </td>
    <td class="text1"><?php echo $_SESSION['session_user']; ?></td>
    <td class="text1">&nbsp;</td>
  </tr>
  <tr>
    <td width="76" class="text1">&nbsp;</td>
    <td width="130" class="text1">&nbsp;</td>
    <td width="150" class="text1">&nbsp;</td>
    <td width="118" class="text1">&nbsp;</td>
  </tr>
  <tr>
    <td class="text1">&nbsp;</td>
    <td class="text1">User Id: </td>
    <td class="text1"><input type="text" name="user" value="<?php echo $user ?>"/></td>
    <td class="text1">&nbsp;</td>
  </tr>
  <tr>
    <td class="text1">&nbsp;</td>
    <td class="text1">Password:</td>
    <td class="text1"><input type="password" name="pass" value="<?php echo $pass ?>"/><td class="text1">
    </tr>
  <tr>
    <td class="text1">&nbsp;</td>
    <td class="text1">E-mail:</td>
    <td class="text1"><input type="text" name="email" value="<?php echo $email ?>"/></td>
    <td class="text1">&nbsp;</td>
  </tr>
  <tr>
    <td class="text1">&nbsp;</td>
    <td class="text1">Address:</td>
    <td class="text1"><input type="text" name="address" value="<?php echo $address ?>"/></td>
    <td class="text1">&nbsp;</td>
  </tr>
  <tr>
    <td class="text1">&nbsp;</td>
    <td class="text1">Mobile Number: </td>
    <td class="text1"><input type="text" name="mob" value="<?php echo $mob ?>"/></td>
    <td class="text1">&nbsp;</td>
  </tr>
  <tr>
    <td class="text1">&nbsp;</td>
    <td class="text1"><input type ="hidden" name ="id" value="<?php echo $id ?>" /></td>
    <td class="text1"><input type ="submit" name="submit" value="SAVE" /></td>
    <td class="text1">&nbsp;</td>
  </tr>
  <tr>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
  </tr>
  <tr>
    <td class="text1">&nbsp;</td>
    <td align="center" class="text1"><a href="register.php">Register</a></td>
    <td align="center" class="text1"><a href="login.php">Login</a></td>
    <td class="text1">&nbsp;</td>
  </tr>
</table>

</form>
</body>
</html>
