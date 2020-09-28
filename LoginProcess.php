<?php
require_once("connecting.php");

if(isset($_POST['LoginBTN']))
{
	$Mail = $_POST['Mail'];
	$Pass = $_POST['password'];

	$sql = "SELECT Email, Password FROM usertable WHERE Password = '$Pass'";
	$result = mysqli_query($link, $sql);

	if($row = mysqli_fetch_assoc($result))
	{
		$PasswordCheck = $row['Password'];
		if($PasswordCheck == $row['Password'])
		{
			session_start();
			$_SESSION['Email'] = $row['Email'];

			header("Location: LandingPage.php?loginsuccess");
			exit();
		}
		else
		{
			header("Location: Login.php?error=wrongEmail");
		}
	}
}
else
{
	echo "wrong";
}