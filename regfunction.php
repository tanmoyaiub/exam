<?php
	require_once('db.php');
	  
	function register($id , $uname,$password,$sname)
		{
			$conn = getConnection();
			$sql  = "insert into users values('','{$uname}','{$password}','{$sname}')";
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