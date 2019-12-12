<?php
	require_once('db.php');
	
	
		function viewuser($id)
		{
			$id=$_GET['id'];
			$conn = getConnection();	
			$sql = "select * from users where id=".$id;
			//echo $sql;
			$result = mysqli_query($conn,$sql);		
			$view = mysqli_fetch_assoc($result);
			
			/*if($result)
				{
					return true;	
				}
			else
				{
					return false;
				}*/
		}

?>