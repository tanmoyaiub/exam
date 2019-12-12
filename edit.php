<?php
	if(isset($_COOKIE['uname']))
	{
			require_once('../db/db.php');
			$id=$_GET['id'];
			$conn = getConnection();	
			$sql = "select * from users where id=".$id;
			//echo $sql;
			$result = mysqli_query($conn,$sql);		
			$edit = mysqli_fetch_assoc($result);
			
			if(isset($_POST['submit']))
				{
					$uname = $_POST['uname'];	
					$password = $_POST['password'];	
					$sname = $_POST['sname'];
						
					$sql = "UPDATE users SET uname='$uname' , password='$password' , sname='$sname' WHERE id=".$id;
					mysqli_query($conn , $sql);
					header("location: view.php?id=" .$id);
						
				}

?>

<!DOCTYPE html>
<html>
<head>
	<title>UpdateUser</title>
</head>
<body>
	<h1>UpdateUser</h1>
	
	<a href="userlist.php">Back</a> |
	<a href="../php/logout.php">LogOut</a>
	
	<form method="POST" action="">		
			<table>
				<tr>
					<td><input type="text" name="uname" value="<?php echo $edit['uname']; ?>" ></td>
				</tr>
				<tr>
					<td><input type="text" name="password" value="<?php echo $edit['password'];?>"> </td>
				</tr>
				<tr>
					<td><input type="text" name="sname" value="<?php echo $edit['sname'];?>"></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Update"></td>
				</tr>
			</table>
	</form>

</body>
</html>
	<?php }else{
			
		header('location:login.php');
	}
	