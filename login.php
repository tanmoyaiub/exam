

<!DOCTYPE html>
<html>
<head>
	<title>LoginPage</title>
</head>
<body>
	<form method="POST" action="../php/logincheck.php">
		<fieldset>
			<legend>LoginPage</legend>
			<table>
				<tr>
					
					<td><input type="text" name="uname" placeholder="username"></td>
				</tr>
				<tr>
					<td><input type="text" name="password" placeholder="password"></td>
				</tr>
				
					
				
				<tr>				
					<td><input type="submit" name="submit" value="submit"></td>
				</tr>
			</table>
		</fieldset>
	</form>
	
	<a href="reg.php">SignUp</a>
</body>
</html>