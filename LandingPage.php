<?php
session_start();
require_once("connecting.php");

?>
<!DOCTYPE html>
<html>
	<head>

		<title> LandingPage </title>
		<link rel="stylesheet" type="text/css" href="LandingPage.css">

	</head>

	<body>
		<div class="Box1">
			<h1 id="Title"> Welcome to this Page </h1>
			<?php
			if(!isset($_SESSION['Email']))
			{?>
				<a href="Login.php" id="LoginLink"> Click to Login </a>
				<?php
			}
			else
			{
				$mymail = $_SESSION['Email'];

				$sql3 = "SELECT Name FROM usertable WHERE Email = '$mymail'";
				$result3 = mysqli_query($link, $sql3);

				$sql4 = "SELECT Password FROM usertable WHERE Email = '$mymail'";
				$result4 = mysqli_query($link, $sql4);

				$sql5 = "SELECT Address FROM usertable WHERE Email = '$mymail'";
				$result5 = mysqli_query($link, $sql5);

				$sql6 = "SELECT ProfilePhoto FROM usertable WHERE Email = '$mymail'";
				$result6 = mysqli_query($link, $sql6);

				echo "<p id='Welcome'> Welcome user ". $_SESSION['Email']."</p>";
				echo "<br>";
				echo "<p id='Details'> Your details are as below: </p>";
				

				echo "<p id='Mail'> Email: ".$mymail."</p>";
				

				if($row = mysqli_fetch_assoc($result3))
				{
					echo "<p id='Name'>Name: ".$row['Name']."</p>";
					echo "<img id='profile' src='Images/profile".$row['Name'].".jpg'>";
					
				}
				if($row = mysqli_fetch_assoc($result4))
				{
					echo "<p id='Pass'>Password: ".$row['Password']."</p>";
					
				}
				if($row = mysqli_fetch_assoc($result5))
				{
					echo "<p id='Address'>Address: ".$row['Address']."</p>";
					
				}

				

				echo "<p id = 'Pchange'> Click <a href='ChangePassword.php'> here </a> to change your password </p>";
				echo "<br><br>";
				echo "<a href='Logout.php'> Logout </a> ";
			}

			?>

			
		</div>

	</body>
</html>