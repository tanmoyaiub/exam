<?php
	if(isset($_COOKIE['uname']))
	{
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h1>Add New User</h1>
	
	<a href="home.php">Back</a> |
	<a href="../php/logout.php">LogOut</a>
	
	<form method="POST" action="../php/insertuser.php">		
			<table>
				<tr>
					<td><input type="text" name="uname" placeholder="username"></td>
				</tr>
				<tr>
					<td><input type="text" name="password" placeholder="password"></td>
				</tr>
				<tr>
					<td><input type="text" name="sname" placeholder="studentname"></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="submit"></td>
				</tr>
			</table>
	</form>

</body>
</html>
	<?php }else{
			
		header('location:login.php');
	}
		