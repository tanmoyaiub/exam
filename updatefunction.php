<?php
	require_once('db.php');
	
	
		function updateuser($id)
		{
			$conn = getConnection();	
			$sql = "select * from users where id=".$id;
			//echo $sql;
			$result = mysqli_query($conn,$sql);		
			$update = mysqli_fetch_assoc($result);
			
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

?>