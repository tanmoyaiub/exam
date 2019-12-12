
<?php
	require_once('../db/regfunction.php');
	
	if(isset($_POST['submit']))
		{
			
			$uname 		= $_POST['uname'];	
			$password 	= $_POST['password'];
			$sname		= $_POST['sname'];
			
			
			if(empty($uname)==true || empty($password)==true || empty($sname)==true)
				{
					echo "null submission";
				}
			else
				{
					$status = register($id , $uname , $password , $sname);
					
					if($status)
						{
							header('location:../Views/login.php?msg=success');		
						}
					else
						{
							header('location:../Views/reg.php?msg=dberror');		
						}				
				}
		}
	else
		{
			header('location:../Views/reg.php');	
		}
		

?>