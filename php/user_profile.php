<?php
	require_once 'connection.php';
	session_start();
?>
<!DOCTYPE html>
<head>
<title>UserProfile</title>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>

<body>
<div class="container" style="margin-top:30px;">
<table width="800px" class="container" border="1" cellpadding="1" cellspacing="1">
	<tr>
    <td class="text1" colspan="2"><strong> <!-- <h3>All Records</h3> --></strong> </td>
    <td class="text1"><span> You are: </span><?php echo $_SESSION['session_user'] ?></td>
    <td class="text1" height="40px" align="center"><a href='logout.php'>Logout</a></td>
  </tr>
</table>


<?php
	

	$query1="SELECT * from emp WHERE id = '".$_SESSION['session_id']."'";  
  $rs=mysqli_query($con, $query1) or die(mysqli_error());

	while($rsdata=mysqli_fetch_array($rs))
	{
		//echo "break"; die();
	@extract($rsdata);
	    

?>

	<table width="800px" class="container" border="1" cellpadding="1" cellspacing="1">
		<tr>
	    <td class="text1"><strong>User Photo: </strong> </td>
	    <td class="text1"><?php echo $photo; ?></td>
	  </tr>
		<tr>
	    <td class="text1"><strong>User Name:</strong> </td>
	    <td class="text1"><?php echo $user; ?></td>
	  </tr>
	  <tr>
	    <td class="text1"><strong>Password: </strong> </td>
	    <td class="text1"><?php echo $pass; ?></td>
	  </tr>
	  <tr>
	    <td class="text1"><strong>Email: </strong> </td>
	    <td class="text1"><?php echo $email; ?></td>
	  </tr>
	  <tr>
	    <td class="text1"><strong>Address: </strong> </td>
	    <td class="text1"><?php echo $address; ?></td>
	  </tr>
	  <tr>
	    <td class="text1"><strong>Mobile: </strong> </td>
	    <td class="text1"><?php echo $mob; ?></td>
	  </tr>
	  <tr>
	    <td class="text1">&nbsp;</td>
	    <td class="text1">&nbsp;</td>
	  </tr>
	  <tr>
	    <td class="text1"><?php echo "<a href='update_profile.php?id=".$rsdata['id']."'>Edit</a>"; ?></td>
	    <td class="text1"><?php echo "<a href='delete_records.php?id=".$rsdata['id']."'>Delete</a>"; ?></td>
	  </tr>
	</table>

<?php
	}
?>

</div>
</body>
</html>