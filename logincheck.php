<?php
	session_start();
	require_once('../db/loginfunction.php');
	
	if(isset($_POST['submit']))
		{
			$uname		=$_POST['uname'];
			$password	=$_POST['password'];
			//$role		=$_POST['Admin'];
			
			if(empty($uname)==true || empty($password)==true)
				{
					echo "null submission";
				}
			else
				{
					$count = validate($uname,$password);
					
					if(count($count) > 0)
					{
						//$_SESSION['uname']    = $uname;
						//$_SESSION['password'] = $password;
						//$_SESSION['role']	 = $role;	
						
					if($count['Role'] == "Admin")
						{
							setcookie("uname" , $uname , time()+3600, "/");
						    header('location:../Views/home.php');
						}
						else if($count['Role'] == "User")
						{
							setcookie("uname" , $uname , time()+3600, "/");
						    header('location:../Views/userhome.php');
						}
						
						
					}
					else
					{
						
						echo "invalid username/password";	
						//header('location:../Views/login.php');
					}
				}
			
			
		}
	else
		{
			header('location:../Views/login.php');	
		}


?>