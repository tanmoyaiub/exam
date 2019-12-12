<?php
	require_once('../db/insertfunction.php');
	
	if(isset($_POST['submit']))
		{
			
			$id			= $_GET['id'];
			$uname 		= $_POST['uname'];	
			$password 	= $_POST['password'];
			$sname		= $_POST['sname'];
			
			
			if(empty($uname)==true || empty($password)==true || empty($sname)==true)
				{
					echo "null submission";
				}
			else
				{
					$status = insert($id , $uname , $password , $sname);
					
					if($status)
						{
							header('location:../Views/userlist.php');		
						}
						else
						{
							echo "database error";		
						}				
				}
		}
	else
		{
			header('location:../Views/userlist.php');	
		}
		

?>