<!DOCTYPE html>
<html>
	<head>

		<title>LOGIN</title>

	</head>

	<body>
		<form action="LoginProcess.php" method="post">
			<h3 id="FieldTitle"> Login </h3>
			<input type="email" name="Mail" id="Mail" placeholder="Enter Email Address">
			<br><br>

			<input type="password" name="password" id="password" placeholder="Enter Password">
			<br><br>

			<input type="submit" name="LoginBTN" id="Login" value="Login">
			<br><br>

			<a href="Register.php"> Create an account? </a>
		</form>

	</body>
</html>