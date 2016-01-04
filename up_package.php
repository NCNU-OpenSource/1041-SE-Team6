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
	if($id=='1'){
		$sql= "update user set carrot_qty=carrot_qty+1 where id='".$userid."';";
		mysqli_query($conn,$sql) or die("MySQL pasckage query error"); //carrot數量增加
		header("Location: shop.php");
	}
	else if($id=='2'){
		$sql= "update user set mushroom_qty=mushroom_qty+1 where id='".$userid."';";
		mysqli_query($conn,$sql) or die("MySQL pasckage query error"); //mushroom數量增加
		header("Location: shop.php");
	}
	else if($id=='3'){
		$sql= "update user set eggplant_qty=eggplant_qty+1 where id='".$userid."';";
		mysqli_query($conn,$sql) or die("MySQL pasckage query error"); //eggplant數量增加
		header("Location: shop.php");
	}
	else if($id=='4'){
		$sql= "update user set corn_qty=corn_qty+1 where id='".$userid."';";
		mysqli_query($conn,$sql) or die("MySQL pasckage query error"); //corn數量增加
		header("Location: shop.php");
	}
	else if($id=='5'){
		$sql= "update user set meat_qty=meat_qty+1 where id='".$userid."';";
		mysqli_query($conn,$sql) or die("MySQL pasckage query error"); //meat數量增加
		header("Location: shop.php");
	}
	else if($id=='6'){
		$sql= "update user set land_qty=land_qty+1 where id='".$userid."';";
		mysqli_query($conn,$sql) or die("MySQL pasckage query error"); //land數量增加
		header("Location: shop.php");
	}
}else{
	$_SESSION['Money'] = 'nomoney';
	header("Location: shop.php");
}
?>
</body>
</html>