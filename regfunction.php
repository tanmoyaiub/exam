<?php
	require_once('db.php');
	  
	function register($id , $uname,$password,$sname,$role)
		{
			$conn = getConnection();
			$sql  = "insert into users values('','{$uname}','{$password}','{$sname}' , '{$role}')";
			//echo $sql;
			
		    if(mysqli_query($conn,$sql))
				{
					return true;	
				}
			else
				{
					return false;
				}		
			
		}

?>