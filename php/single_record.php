<?php
	//include('session.php');
	session_start();
?>
<!DOCTYPE html>
<head>
<title>UserProfile</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>

<body>
<div class="container" style="margin-top:30px;">
<table width="800px" class="container" border="1" cellpadding="1" cellspacing="1">
	<tr>
    <td class="text1" colspan="3"><strong> <h3>All Records</h3></strong> </td>
    <td class="text1" height="40px" align="center"><a href='#'>Logout</a></td>
  </tr>
</table>

<table width="800px" class="container" border="1" cellpadding="1" cellspacing="1">
			<tr>
		    <td class="text1"><strong>User Name:</strong> </td>
		    <td class="text1"><strong>Password:</strong></td>
		    <td class="text1">&nbsp;</td>
		    <td class="text1" height="40px" align="center"><a href='new_record.html'>Add Records</a></td>
		  </tr>
<?php
	require_once 'connection.php';

	$query1="SELECT * from persons where uid = '$id'";
  $rs=mysqli_query($con, $query1) or die(mysqli_error());
  while($row = mysqli_fetch_array($rs)) {

    echo "<tr>";

     echo "<td class='text1'>" .$row['user']. "</td>";
     echo "<td class='text1'>" .$row['pass']. "</td>";
     echo "<td class='text1'><a href='update_records.php?id=".$row['id']."'>Edit</a></td>";
		 echo "<td class='text1'><a href='delete_records.php?id=".$row['id']."'>Delete</a></td>";

    echo "</tr>";

    }

?>
	    <tr>
		    <td class="text1">&nbsp;</td>
		    <td class="text1">&nbsp;</td>
		    <td class="text1">&nbsp;</td>
				<td class="text1">&nbsp;</td>
	    </tr>
		</table>


<!-- echo '<td class="text1"><a href='edit.php?id="$row['uid']"'>Edit</a></td>';
			echo '<td class="text1"><a href='edit.php?id="$row['uid']"'>Delete</a></td>'; -->
</div>
</body>
</html>