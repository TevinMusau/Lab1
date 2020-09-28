<?php

$server = 'localhost';
$username = 'root';
$password = '';
$db = 'lab1';

$link = mysqli_connect($server, $username, $password, $db);

if(!$link)
{
	die("Could not connect to the database");
}
else
{
	//echo "Connection Successful";
}
?>