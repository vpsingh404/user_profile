<?php
session_start();
if($_SESSION['au']!=3)
{	header("Location:login.php");
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
<title>TemplateWorld.com Template - Web 2.0</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="innerstyle.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style5 {
	color: #FFFFFF;
	font-weight: bold;
}
.style6 {color: #FFFFFF}
-->
</style>
<!--
<script language = "Javascript">

function Validate()
{
    if (document.register.name.value == '') 
    {
        alert('Please fill your name!');
        return false;
    }
    if (document.register.password1.value == '') 
    {
       alert('Please fill in your desired password!');
      return false;
    }
    if (document.register.password2.value == '') 
    {
       alert('Please fill in your password again for confirmation!');
      return false;
    }
    if (document.register.password1.value != 
    document.register.password2.value) 
    {
        alert("The passwords are not identical! "+
        "Please enter the same password again for confirmation");
        return false;
    }
    if (document.register.company.value == '') 
    {
        alert('Please fill in your company name!');
        return false;
    }
	 if (document.register.email.value == '') 
    {
        alert('Please fill in your email!');
        return false;
    }
	 if (document.register.mobile.value == '') 
    {
        alert('Please fill in your mobile number!');
        return false;
    }
	 if (document.register.address.value == '') 
    {
        alert('Please fill in your address');
        return false;
    }
    return true;
}
</script>
-->
</head>
<body>


<!--header start -->
<div id="header">
<ul class="nav">
<li><a href="index.html" class="nav">home</a></li>
<li><a href="package.php" title="portfolio">portfolio</a></li>
<li><a href="profile.php">Profile</a></li>
<li><a href="login.php">Login</a></li>
<li><a href="logout.php">Logout</a></li>
<li><a href="register.php" class="hover">Register</a></li>
</ul>
<a href="index.html"><img src="images/logo.gif" alt="efficient" width="390" height="102" border="0" class="logo" /></a>
<ul class="sub">
<li><a href="login.php" class="blog">Login</a></li>
<li><a href="logout.php" class="ideas">Logout</a></li>
<li><a href="register.php" class="support">Register</a></li>
</ul>
<h2>Introduction</h2>
</div>
<!--header end -->
<!--body start -->
<div id="body">

<!--left start -->


<!--mid end -->
<!--tight start -->

<!--tight end -->
<table width="980px" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td width="243" valign="top"><div id="mid">
  <!--event start -->
  <!--event end -->
 <h2>glossy</h2>
<h3>future</h3>
<p class="midTxt1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent adipiscing</p>
<p class="midTxt2">Suspendisse ipsum. Nulla ut orci vitae diam iaculis dictum</p>
<p class="midTxt3"><span>Fusce tempus</span> egestas eros. Suspendisse orci dui, feugiat vel, Quisque iaculis, sapien in pulvinar varius,</p>
<div id="black">
<p class="whiteTxt"><span class="green2">psum id nislpo.</span> <span class="bigTxt">Praesent quis magna vel neque</span> 
porttitor mollis. In eleifend,risuset hendrerit tempor,<br />
<span class="white2">venenatis elit odio rutrum nibh phasellus</span></p>
  <br class="spacer" />
</div>
<!--left end -->
<!--mid start -->

<br class="spacer" />
</div></td>
    <td width="555" valign="top"><table width="100%" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#FFCC99">
  <tr>
    <td height="38" colspan="4" align="center" bgcolor="#3366FF"><table width="100%" border="0" cellspacing="2" cellpadding="2">
      <tr>
        <td height="24" align="center" class="style5"><?php
    
$id=$_POST['id'];
$user=$_POST['user'];
$pass=$_POST['pass'];
$email=$_POST['email'];
$address=$_POST['address'];
$mob=$_POST['mob'];
$city=$_POST['city'];
$country=$_POST['country'];
$ugcourse=$_POST['ugcourse'];
$pgcourse=$_POST['pgcourse'];

	
	$con=mysql_connect("localhost","root","") or die (mysql_error());
	mysql_select_db("tempo");
	//$up ="update emp set $a ='t1' and $b ='t2' where t1='$a' and t2='$b'";
	//mysql_query($up);

	mysql_query("UPDATE emp SET user='".$user."',pass='".$pass."',email='".$email."',address='".$address."',mob='".$mob."',city='".$city."',country='".$country."',ugcourse='".$ugcourse."',pgcourse='".$pgcourse."' WHERE id='".$id."'");
	echo "Data has been save successfully";
		
?> </td>
        </tr>
    </table></td>
    </tr>
  <tr>
    <td width="90" class="text1">&nbsp;</td>
    <td width="135" class="text1">&nbsp;</td>
    <td width="131" class="text1">&nbsp;</td>
    <td width="118" class="text1">&nbsp;</td>
  </tr>
  <tr>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
  </tr><tr>
    <td align="center" class="text1">&nbsp;</td>
    <td align="center" class="text1">&nbsp;</td>
    <td align="center" class="text1">&nbsp;</td>
    <td align="center" class="text1">&nbsp;</td>
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
</table></td>
    <td width="192" align="center" valign="top"><div id="right"><img src="images/cm4_160x600.gif" width="193" height="600" />


</div></td>
  </tr>
  <tr>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
</table>
<br class="spacer" />
</div>
<!--body end -->
<!--footer start -->
<div id="footerMain">
  <div id="footer"> 
    <ul>
      <li><a href="#">home</a>|</li>
      <li><a href="#">serch</a>|</li>
      <li><a href="#">services</a>|</li>
      <li><a href="#">blog</a>|</li>
      <li><a href="#">duty</a>|</li>
      <li><a href="#">contact</a></li>
    </ul>
    <p class="copyright">Copyright © Efficient 20XX. All Rights Reserved.</p>
    <p class="design">Designed by : <a href="http://www.templateworld.com/" target="_blank" class="link">Template 
      World</a></p>
  <a href="http://validator.w3.org/check?uri=referer" class="xhtml"></a> <a href="http://jigsaw.w3.org/css-validator/check/referer" class="css"></a>  </div>
</div>
<!--footer end -->
</body>
</html>
