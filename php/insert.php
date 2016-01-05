<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>註冊</title>
</head>
<style type="text/css">
h1 {padding:5px;  text-align: center}
body {width: 300px;
 margin:100px auto;
 font-size:14pt;
 
 background-attachment:fixed;
 }
 </style>
<body  style="background-image:url(img/p1.jpg)">
<p>
  <?php
$host = 'localhost';
$user = 'myid';
$pass = '12345';
$db = 'mydb';
$conn = mysqli_connect($host, $user, $pass,$db) or die('Error with MySQL connection'); //跟MyMSQL連線並登入
mysqli_query($conn,"SET NAMES utf8"); //選擇編碼
//mysql_select_db($db, $conn); //選擇資料庫

$id=mysqli_real_escape_string($conn,$_POST['id']);
$password=mysqli_real_escape_string($conn,$_POST['password']);
$sex=mysqli_real_escape_string($conn,$_POST['sex']);

for($i=1;$i<=50;$i++){
	$sql= "select * from user ";
	if($results=mysqli_query($conn,$sql)){
		$rs=mysqli_fetch_array($results);
		$username=(string)$rs['id'];
		$nian=strcmp($id,$username);
		if($nian==0){
			$nianle=1;
		}
	}
}
if($id==""||$password==""||$sex==""){
	$_SESSION['kosong']= 1;
	header("Location:register.php");
}
else{
	if($nianle==1){
		$_SESSION['rep']= 1;
		header("Location:register.php");
	}
	else{
		$sql = "insert into user (id, password, sex) values ('$id', '$password', '$sex');";
		mysqli_query($conn,$sql) or die("MySQL insert message error"); //執行SQL
		$_SESSION['sus']= 1;	
		header("Location:login.php");
	}
}
?>
</body>
</html>
