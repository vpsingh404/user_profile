<?php 
	require_once 'connection.php'; ?>		
<?php

	if(isset($_GET['id'])){
			$id=$_GET['id'];
			
		$records="select * from persons where id='$id'";
		$query1=mysqli_query($con, $records);
		$result=mysqli_fetch_array($query1);

?>
<div class="container" style="margin-top:30px;">
	<div class="col-sm-4"><h1>Update Records</h1></div>
	<div class="col-sm-4">
		<form method="post" action="save.php?id=<?php echo $_GET['id']; ?>">
		<!-- <form method="post" action=""> -->
				user:<input type="text" name="user" value="<?php echo $result['user']; ?>" /><br />
				pass:<input type="text" name="pass" value="<?php echo $result['pass']; ?>" /><br /><br />
				<br />
				<input type="submit" name="submit" value="update" />
		</form>
	</div>
</div>
<?php
	}
?>



