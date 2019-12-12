<?php
	require_once('db.php');

	function getAllUser()
	{
		$conn 	= getConnection();
		$sql  	= "select * from users";	 
		$result = mysqli_query($conn , $sql);
		$data   = array();
		while($row = mysqli_fetch_assoc($result))
			{
				array_push($data , $row);	
			}
		return $data;
	}

	

?>