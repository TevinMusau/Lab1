<?php
session_start();
require_once("connecting.php");

if(isset($_SESSION['Email']))
{
	$mymail = $_SESSION['Email'];
	$sql = "SELECT Password FROM usertable WHERE Email = '$mymail'";
	$result = mysqli_query($link, $sql);

	if($row = mysqli_fetch_assoc($result))
	{
		echo "Your current password is ".$row['Password'];
		echo "<br><br>";
	}
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>CHANGE PASSWORD</title>
	</head>
	<body>
		<form method="Post" action="ChangePasswordProcess.php">
		<input type="password" name="passwordnew" id='passwordnew' placeholder="Enter New Password">
		<input type="password" name="passwordnewC" id='passwordnewC' placeholder="Confirm New Password">
		<input type="submit" name="PasswordChange" id="PasswordChange" value="Submit">
		</form>
	
	</body>
	</html>
	<?php
}
?>