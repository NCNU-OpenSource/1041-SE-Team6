<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登入</title>
</head>

<body>
<?php
session_start();
$host = 'localhost';
$user = 'myid';
$pass = '12345';
$db = 'mydb';
$conn = mysqli_connect($host, $user, $pass,$db) or die('Error with MySQL connection'); //跟MyMSQL連線並登入
mysqli_query($conn,"SET NAMES utf8"); //選擇編碼
//mysql_select_db($db, $conn); //選擇資料庫
$_SESSION['uID'] = "";
$_SESSION['nName']= "";
if(isset($_POST['id']))
	$userName = $_POST['id'];
else
	$userName ="";
if(isset($_POST['pwd']))
	$passWord = $_POST['pwd'];
else
	$passWord ="";
		$sql = "SELECT * FROM user WHERE id='" . $userName . "' AND password= '" . $passWord . "'   ";
		
		if ($result = mysqli_query($conn,$sql)) {
			if ($row=mysqli_fetch_array($result)) {
				$_SESSION['uID'] = $row['id'];
				
				header("Location:02.list.php");
				
				exit(0);
			} 
			

			
		}
		
		
?>
<style type="text/css">
h1 {padding:5px;  text-align: center}
body {width: 550px;
 margin:150px auto;
 font-size:14pt;
 background-image:url(p1.png);
 background-attachment:fixed;
 }
#content {color:red; background-color:#82FF82; border:5px solid black; padding:15px}
 
input {font-size:20pt}
</style>


<div id="content">



<form method="post" action="login.php">
<h1>帳號 : <input type="text" name="id"><br /></h1>
<h1>密碼 : <input type="password" name="pwd"><br /></h1>

<h1><input type="submit" value="登入">
<a href="login.php">註冊</a> </p>
</h1>
</form>
</div>



</body>
</html>
