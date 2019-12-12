<?php
		include_once('../db/deletefunction.php');
		
		if(isset($_GET['id']))
			{
				$status = deleteuser($_GET['id']);
				
				if($status)
					{
						header('location:../Views/userlist.php');
					}
				else
					{	
						echo "Error:Try again";
					}
			}
		else
			{
				echo"invalid request";	
			}	
?>