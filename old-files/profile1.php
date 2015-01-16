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

<body>

<table width="500" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#FFCC99">
  <tr>
    <td width="64" class="text1">&nbsp;</td>
    <td colspan="2" align="center" class="text1">Check your profile </td>
 <td width="125" align="center" class="text1"><a href="logout.php">Logout</a></td>
  </tr>
  <tr>
    <td class="text1">&nbsp;</td>
    <td width="132" class="text1">Logged in as User:</td>
    <td width="153" class="text1"><?php echo $_SESSION['session_user']; ?></td>
    <td class="text1">&nbsp;</td>
  </tr>
  <tr>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
  <tr>
  <?php
$sql="select * from emp where id='".$_SESSION['session_id']."'";

$rs=mysql_query($sql);
while($rsdata=mysql_fetch_array($rs))
{
@extract($rsdata);
?>

    <td class="text1">&nbsp;</td>
     <td class="text1">User id </td>
     <td class="text1"><?php echo $user; ?></td>
  <td class="text1">&nbsp;</td>
  <tr>
    <td class="text1">&nbsp;</td>
    <td class="text1">Password</td>
    <td class="text1"><?php echo $pass; ?></td>
   <td  class="text1">&nbsp;</td>
  </tr>
  <?php }  ?>
  <tr>
    <td class="text1">&nbsp;</td>
    <td class="text1">E-mail:</td>
    <td class="text1"><?php echo $email; ?></td>
    <td class="text1">&nbsp;</td>
  </tr>
  <tr>
    <td class="text1">&nbsp;</td>
    <td class="text1">Address:</td>
    <td class="text1"><?php echo $address; ?></td>
    <td class="text1">&nbsp;</td>
  </tr>
  <tr>
    <td class="text1">&nbsp;</td>
    <td class="text1">Mobile Number: </td>
    <td class="text1"><?php echo $mob; ?></td>
      <td  class="text1"><a href="calldata.php?id=<?php echo $id;?>">Edit</a></td>
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