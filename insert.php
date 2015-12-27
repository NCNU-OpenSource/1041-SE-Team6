<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>註冊</title>
</head>

<body>



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
if ($id) {
	$sql = "insert into user (id, password, sex) values ('$id', '$password', '$sex');";
	mysqli_query($conn,$sql) or die("MySQL insert message error"); //執行SQL
	echo "註冊成功  恭喜您成為正式玩家~.";
	
} else {
	echo "註冊失敗,請重新註冊一次.";
}
?>
</p>
<p><a href="addform.php">回註冊畫面</a> </p>
<p><a href="login.php">回登入畫面</a> </p>
</body>
</html>
