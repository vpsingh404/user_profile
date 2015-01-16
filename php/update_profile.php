<?php 
	require_once 'connection.php'; 
	session_start();


	if(isset($_GET['id'])){
			$id=$_GET['id'];
			
		$records="SELECT * from emp where id = '".$_SESSION['session_id']."'"; 
		$query1=mysqli_query($con, $records);
		$result=mysqli_fetch_array($query1);

?>
<div class="container" style="margin-top:30px;">
	<div class="col-sm-4"><h1>Update Records</h1></div>
	<div class="col-sm-4">
		<form method="post" action="save_profile.php?id=<?php echo $_GET['id']; ?>">
		<!-- <form method="post" action=""> -->
				<!-- user:<input type="text" name="user" value="<?php# echo $result['user']; ?>" /><br />
				pass:<input type="text" name="pass" value="<?php# echo $result['pass']; ?>" /><br /><br />
				<br />
				<input type="submit" name="submit" value="update" /> -->
		
		<table width="800px" class="container" border="1" cellpadding="1" cellspacing="1">
			<tr>
		    <td class="text1"><strong>User Name:</strong> </td>
		    <td class="text1"><input type="text" name="user" value="<?php echo $result['user']; ?>" /></td>
		  </tr>
		  <tr>
		    <td class="text1"><strong>Password: </strong> </td>
		    <td class="text1"><input type="text" name="pass" value="<?php echo $result['pass']; ?>" /></td>
		  </tr>
		  <tr>
		    <td class="text1"><strong>Email: </strong> </td>
		    <td class="text1"><input type="text" name="email" value="<?php echo $result['email']; ?>" /></td>
		  </tr>
		  <tr>
		    <td class="text1"><strong>Address: </strong> </td>
		    <td class="text1"><input type="text" name="address" value="<?php echo $result['address']; ?>" /></td>
		  </tr>
		  <tr>
		    <td class="text1"><strong>Mobile: </strong> </td>
		    <td class="text1"><input type="text" name="mob" value="<?php echo $result['mob']; ?>" /></td>
		  </tr>
		  <tr>
		    <td class="text1">&nbsp;</td>
		    <td class="text1"><input type="submit" name="submit" value="update" /></td>
		  </tr>
		</table>
	</form>
	</div>
</div>
<?php
	}
?>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">


