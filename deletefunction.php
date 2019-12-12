<?php
	require_once('db.php');
	
	function deleteuser($id)
		{
			$conn = getConnection();	
			$sql = "delete from users where id=".$id;
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