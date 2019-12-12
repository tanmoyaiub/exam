<?php
	session_start();
	require_once('../db/userlistfunction.php');
	$data = getAllUser();	

?>
<!DOCTYPE html>
<html>
<head>
	<title>UserList</title>
</head>
<body>
	<h2>User List</h2>
	
	<a href="home.php">Back</a>
	<a href="../php/logout.php">LogOut</a>
	
	<table border="1">
		<tr>
			<th>ID</th>
			<th>UserName</th>
			<th>Password</th>
			<th>StudentName</th>
			<th>Action</th>
		</tr>
		
		<?php for($i=0; $i<count($data); $i++) { ?>
		<tr>
			<td><?=$data[$i]['id'];?></td>
			<td><?=$data[$i]['uname'];?></td>
			<td><?=$data[$i]['password'];?></td>
			<td><?=$data[$i]['sname'];?></td>
			<td>
				<a href="edit.php?id=<?= $data[$i]['id'] ?>">Edit</a>
				<a href="view.php?id=<?= $data[$i]['id'] ?>">View</a>
				<a href="../php/delete.php?id=<?=$data[$i]['id']?>">Delete</a>
			</td>
		</tr>
		<?php } ?> 
		
	</table>
	
	<div id="text">Text</div>
	
	<input type="text" name="" method="POST" action="" onkeyup="search(this.value)"/>
	
	<div id="content"></div>
	
	<script type="text/javascript">
	
		function search(val)
			{
				var xhttp = new XMLHttpRequest();
				xhttp.open("POST" , "search.php" , true);
				xhttp.setRequestHeader('Content-type' , 'application/x-www-form-urlencoded');	
				xhttp.send('key='+val);
				
				xhttp.onreadystatechange = function()
				{
					if(this.readyState == 4 && this.status == 200)
					{
						//alert(this.responseText);
						document.getElementById('content').innerHTML = this.responseText;
					}
				};
				
			} 
	
		</script>
	
</body>
</html>

