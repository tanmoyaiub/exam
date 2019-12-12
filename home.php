<?php
	session_start();
	if(isset($_COOKIE['uname'])){
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>

	<h1>Welcome AdminHomePage! <?=$_COOKIE['uname']?></h1> 
	
	<a href="userlist.php">UserList</a> | 
	<a href="adduser.php">AddUser</a> | 
	<a href="../php/logout.php">logout</a>

</body>	
</html>


<?php		
	}else{
		header('location: login.php');
	}
?>