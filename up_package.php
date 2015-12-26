<?php 
require("config.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PutIn Package</title>
</head>
<body>
<?php
$id=(int)$_GET['id'];
if($id<=0){
	echo "empty ID";
	exit(0);
}
$userid=$_SESSION['uID'];
$sqluser = "select * from user where id='".$userid."';";
$rsuser=mysqli_query($conn,$sqluser);
$rsu=mysqli_fetch_array($rsuser);

$sqlpack = "select * from package where id=$id;";
$rspack=mysqli_query($conn,$sqlpack);
$rsp=mysqli_fetch_array($rspack);
if($rsu['cashinhand']>=$rsp['item_price']){ //檢查夠不夠錢
	$sql ="update user set cashinhand=cashinhand-".$rsp['item_price']." where id='".$userid."';";
	mysqli_query($conn,$sql) or die("MySQL user query error"); //user的錢減少
	$sql = "update package set qty=qty+1 where id=$id;";
	mysqli_query($conn,$sql) or die("MySQL pasckage query error"); //購買的item數量增加
	header("Location: shop.php");
	}
	else{
	header("Location: shop.php");
	}
?>
</body>
</html>