<?php
session_start();

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
.style9 {
	font-size: 14px;
	color: #FFFFFF;
	font-weight: bold;
}
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
    <td width="555" valign="top"><form action="insert.php" method="post">
<table width="600" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#FFCC99">
  <tr>
    <td height="52" colspan="4" align="center" bgcolor="#FF6600"><span class="style5">Please Register here </span><br />
	  <span class="style6">if you are already a member Please &nbsp;<a href="login.php" class="readMore">Login</a></span></td>
    </tr>
  <tr>
    <td width="61" class="text1">&nbsp;</td>
    <td colspan="2" align="center" class="text1"><?php
if($_GET['str'])
{
echo $_GET['str'];
}
?></td>
    <td width="131" class="text1">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" bgcolor="#FF6600"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="13%" height="22" >&nbsp;</td>
        <td width="30%" align="left"><span class="style9">Create Your Account</span> </td>
        <td width="57%" align="left" class="style5">&nbsp;</td>
      </tr>
    </table></td>
    </tr>
  
  <tr>
    <td class="text1">&nbsp;</td>
    <td width="126" class="text1">&nbsp;</td>
    <td width="256" class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
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
	<td class="text1">    </tr>
  <tr>
    <td class="text1">&nbsp;</td>
    <td class="text1">Confirm Password: </td>
    <td class="text1"><input type="password" id="t3" name="pass1" /></td>
    <td class="text1">&nbsp;</td>
  </tr>
  <tr>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" bgcolor="#FF6600"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="13%" height="22" >&nbsp;</td>
        <td width="30%" align="left"><span class="style9">Contact Details</span> </td>
        <td width="57%" align="left" class="style5">&nbsp;</td>
      </tr>
    </table></td>
    </tr>
  <tr>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
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
    <td class="text1">Location:</td>
    <td class="text1">
	<select name="city" id="city" style="width: 190px;" class="" onkeydown="return trapKey(event,this)">
<option value="-1">Select</option>
<option value="2">Ahmedabad</option>
<option value="3">Bengaluru / Bangalore</option>
<option value="4">Chandigarh</option>
<option value="5">Chennai</option>
<option value="6">Delhi</option>
<option value="7">Gurgaon</option>
<option value="8">Hyderabad / Secunderabad</option>
<option value="9">Kolkata</option>
<option value="10">Mumbai</option>
<option value="11">Noida</option>
<option value="12">Pune</option>
</select></td>
    <td class="text1">&nbsp;</td>
  </tr>
  <tr>
    <td class="text1">&nbsp;</td>
    <td class="text1">Country:</td>
    <td class="text1">
<select style="width: 120px;" name="country" id="country" class="">
<option value="1">Doha</option>
<option value="2">Dubai</option>
<option value="3">France</option>
<option value="4">Germany</option>
<option value="5">Hong Kong</option>
<option value="6" selected="selected">INDIA</option>

</select></td>
    <td class="text1">&nbsp;</td>
  </tr>
  <tr>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" bgcolor="#FF6600"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="13%" height="22" >&nbsp;</td>
        <td width="30%" align="left"><span class="style9">Education  Details</span> </td>
        <td width="57%" align="left" class="style5">&nbsp;</td>
      </tr>
    </table></td>
    </tr>
  <tr>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
  </tr>
  <tr>
    <td class="text1">&nbsp;</td>
    <td class="text1">Basic/Graduation:</td>
    <td class="text1"><span name="borderele" class="">
<select name="ugcourse" id="ugcourse" style="width: 180px;" class="">
  <option value="-1" selected="selected">Select</option>
  <option value="1">Not Pursuing Graduation</option>
  <option value="2">B.A</option>
  <option value="3">B.Arch</option>
  <option value="4">BCA</option>
  <option value="5">B.B.A</option>
  <option value="6">B.Com</option>
  <option value="7">B.Ed</option>
  <option value="8">BDS</option>
  <option value="9">BHM</option>
  <option value="10">B.Pharma</option>
  <option value="11">B.Sc</option>
  <option value="12">B.Tech/B.E.</option>
  <option value="13">LLB</option>
  <option value="14">MBBS</option>
  <option value="15">Diploma</option>
  <option value="16">BVSC</option>
  <option value="9999">Other</option>
</select>
</span></td>
    <td class="text1">&nbsp;</td>
  </tr>
  <tr>
    <td class="text1">&nbsp;</td>
    <td class="text1">Post Graduation:</td>
    <td class="text1"><select name="pgcourse" id="pgcourse" 
style="width: 180px;" class="">
		<option value="-1" selected="selected">Select</option>
		<option value="1">CA</option>
		<option value="2">CS</option>
		<option value="3">ICWA</option>
		<option value="4">Integrated PG</option>
		<option value="5">LLM</option>
		<option value="6">M.A</option>
		<option value="7">M.Arch</option>
		<option value="8">M.Com</option>
		<option value="9">M.Ed</option>
		<option value="10">M.Pharma</option>
		<option value="11">M.Sc</option>
		<option value="12">M.Tech</option>
		<option value="13">MBA/PGDM</option>
		<option value="14">MCA</option>
		<option value="15">MS</option>
		<option value="16">PG Diploma</option>
		<option value="17">MVSC</option>
		<option value="18">MCM</option>
		<option value="9999">Other</option>
		</select></td>
    <td class="text1">&nbsp;</td>
  </tr>
  <tr>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" bgcolor="#FF6600"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="13%" height="22" >&nbsp;</td>
        <td width="30%" align="left"><span class="style9">Upload Your Resume</span> </td>
        <td width="57%" align="left" class="style5">&nbsp;</td>
      </tr>
    </table></td>
    </tr>
  <tr>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
  </tr>
  <tr>
    <td class="text1">&nbsp;</td>
    <td class="text1">Attach Resume:</td>
    <td valign="top" class="text1"><input type="file" name="BROWSECV" id="browsecv" size="37" /></td>
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
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
  </tr>
  <tr>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
    <td class="text1"><input type ="submit" name="submit" value="submit" />&nbsp;<input type ="reset" name="reset" value="reset" /></td>
    <td class="text1">&nbsp;</td>
  </tr>
  <tr>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
    <td class="text1">&nbsp;</td>
  </tr>
</table>

</form></td>
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
