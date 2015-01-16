<?php
session_start();

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

$_SESSION['session_user']='';
$_SESSION['session_id']='';
$_SESSION['au']=0;
if(isset($_POST['submit']))
{
 $user=$_POST['user'];
 $pass=$_POST['pass'];
 
 $sql="select * from emp where user='".$user."' and pass='".$pass."'";  
 $rs=mysql_query($sql);
 
 if(mysql_num_rows($rs)>0)
 {
   $rsdata=mysql_fetch_array($rs);
   @extract($rsdata);
   $_SESSION['session_id']=$id;
   $_SESSION['session_user']=$user;
   $_SESSION['au']=3;
   header("Location:home.php");
 }
}
?>
<form action="" method="POST">
<table width="500" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#FFCC99">
  <tr>
    <td width="90" class="text1">&nbsp;</td>
    <td width="104" class="text1">&nbsp;</td>
    <td width="162" class="text1">&nbsp;</td>
    <td width="118" class="text1">&nbsp;</td>
  </tr>
  <tr>
    <td class="text1">&nbsp;</td>
    <td class="text1">User Id: </td>
    <td class="text1"><input type="text" name="user" id="user" /></td>
    <td class="text1">&nbsp;</td>
  </tr>
  <tr>
    <td class="text1">&nbsp;</td>
    <td class="text1">Password:</td>
    <td class="text1"><input type="password" name="pass" id="pass" /><td class="text1">
    </tr>
  <tr>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
    <td class="text1"><input type ="submit" name="submit" value="submit" /></td>
    <td class="text1">&nbsp;</td>
  </tr>
  <tr>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" class="text1"><a href="register.php">Register</a></td>
    <td align="center" class="text1"><a href="profile.php">Profile</a></td>
     <td align="center" class="text1"><a href="login.php">Login</a></td>
  <td align="center" class="text1"><a href="logout.php">Logout</a></td>
  </tr>
  <tr>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
  </tr>
</table>

</form>
</body>
</html>
