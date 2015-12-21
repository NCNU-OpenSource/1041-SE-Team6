<?php
session_start();

$host = 'localhost';
$user = 'myid';
$pass = '12345';
$db = 'mydb';

$conn = mysqli_connect($host, $user, $pass,$db) or die('Error with MySQL connection'); 
mysqli_query($conn,"SET NAMES utf8"); 

	if ( ! isset($_SESSION["uID"])) 
		header("Location: login.php");
	if ( $_SESSION["uID"] == "" ) 
		header("Location: login.php");

?>
