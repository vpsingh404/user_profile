<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="main.css" type="text/css" rel="stylesheet" />
</head>

<body style="margin-top:50px;">



<form action="insert.php" method="post">
<table width="600" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#FFCC99">
  <tr>
    <td class="text1">&nbsp;</td>
    <td colspan="2" align="center" class="text1">
<?php
if($_GET['str'])
{
echo $_GET['str'];
}
?></td>
    <td class="text1">&nbsp;</td>
  </tr>
  <tr>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
  </tr>
  <tr>
    <td width="90" class="text1">&nbsp;</td>
    <td width="104" class="text1">&nbsp;</td>
    <td width="162" class="text1">&nbsp;</td>
    <td width="118" class="text1">&nbsp;</td>
  </tr>
  <tr>
    <td class="text1">&nbsp;</td>
    <td class="text1">User Id: </td>
    <td class="text1"><input type="text" id="t1" name="user" /></td>
    <td class="text1">&nbsp;</td>
  </tr>
  <tr>
    <td class="text1">&nbsp;</td>
    <td class="text1">Password:</td>
    <td class="text1"><input type="password" id="t2" name="pass" /></td>
	<td class="text1">
    </tr>
  <tr>
    <td class="text1">&nbsp;</td>
    <td class="text1">E-mail:</td>
    <td class="text1"><input type="text" id="email" name="email" /></td>
    <td class="text1">&nbsp;</td>
  </tr>
  <tr>
    <td class="text1">&nbsp;</td>
    <td class="text1">Address:</td>
    <td class="text1"><input type="text" id="address" name="address" /></td>
    <td class="text1">&nbsp;</td>
  </tr>
  <tr>
    <td class="text1">&nbsp;</td>
    <td class="text1">Mobile:</td>
    <td class="text1"><input type="text" id="mob" name="mob" /></td>
    <td class="text1">&nbsp;</td>
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
