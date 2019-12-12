<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>

	<form method="POST" action="../php/regcheck.php">
		<fieldset>
			<legend>Registration</legend>
		<table>
			<tr>
				<td>UserName:</td>
				<td><input type="text" name="uname"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>StudentName:</td>
				<td><input type="text" name="sname"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Submit"></td>
				<td></td>
			</tr>
		</table>
		</fieldset>
	</form>
	<a href="login.php">SignIn</a>
</body>
</html>