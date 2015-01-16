<?php require_once 'connection.php'; ?>

		
<?php
	if(isset($_GET['id']))
		{
			$id=$_GET['id'];
			$query1="DELETE from persons where id='$id'";
			$res = mysqli_query($con, $query1);

			if($res){
					header('location:show_records.php');
				}
		}
	   


