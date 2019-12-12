<?php
	require_once('db.php');

	function validate($uname ,$password)
		{
			
			$conn = getConnection();
			$sql = "select * from users where uname = '$uname' AND password = '$password'";
			
			$result = mysqli_query($conn , $sql);
			$user   = mysqli_fetch_assoc($result);
			
			return $user;
		}	
		
?>	