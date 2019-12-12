<?php
	require_once('../db/db.php');
	
	$term = $_POST['key'];
	$conn = getConnection();
	$sql  = "select sname from users where sname like '%{$term}%'";
	//echo $sql;
	$result = mysqli_query($conn , $sql);
	$row = "";
	while($text = mysqli_fetch_assoc($result))
	{
		$row .= $text['sname']."<br>";
		//echo print_r($text);
	}	
	echo $row;
?>


