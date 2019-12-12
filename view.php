<?php
	require_once('../db/db.php');
	$id=$_GET['id'];
			$conn = getConnection();	
			$sql = "select * from users where id=".$id;
			//echo $sql;
			$result = mysqli_query($conn,$sql);		
			$view = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
	<title>View Info</title>
</head>
<body>
	<h2>View Info</h2>
	
	<table border="1">
		<tr>
			<th>ID:</th>
			<td><?php echo $view['id']; ?></td>
		</tr>
		<tr>
			<th>UserName:</th>
			<td><?php echo $view['uname']; ?></td>
		</tr>
		<tr>
			<th>Password:</th>
			<td><?php echo $view['password']; ?></td>
		</tr>
		<tr>
		<th>Name:</th>
		<td><?php echo $view['sname']; ?></td>	
		</tr>
	</table>
	
	<a href="userlist.php">Back</a>
	<a href="../php/logout.php">LogOut</a>
	
	
</body>
</html>

