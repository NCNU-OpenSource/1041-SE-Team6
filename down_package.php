<?php 
require("config.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Putdown Package</title>
</head>
<body>
<?php

$id=(int)$_GET['id'];
if($id<=0){
	echo "empty ID";
	exit(0);
}
$userid=$_SESSION['uID'];
$sqluser = "select * from user where id='".$userid."' ;";
$rsuser=mysqli_query($conn,$sqluser);
$rsu=mysqli_fetch_array($rsuser);
$sqlpack = "select * from package where id=$id;";
$rspack=mysqli_query($conn,$sqlpack);
$rsp=mysqli_fetch_array($rspack);

if($rsp['id']<='4'&&($rsp['qty']>=1)){
	
	if($rsu['lovecount']>=$rsp['item_hp']){ //檢查夠不夠心
		$sql ="update user set lovecount=lovecount-".$rsp['item_hp']." where id='".$userid."';"; //user的心減少
		mysqli_query($conn,$sql) or die("MySQL query error");
		$sql = "update package set qty=qty-1 where id=$id;";//數量減少
		mysqli_query($conn,$sql) or die("MySQL query error");
		$sql ="update user set exp=exp+".$rsp['item_exp']." where id='".$userid."';"; //經驗增加
		mysqli_query($conn,$sql) or die("MySQL query error");
		header("Location: 02.list.php");
	}
}	
else if($rsp['id']=='5'&&($rsp['qty']>=1)){ //雞腿
	$sqlm ="update user set lovecount=lovecount+'1' where id='".$userid."';"; //user的心+1
	mysqli_query($conn,$sqlm) or die("MySQL query error");
	$sqlm = "update package set qty=qty-'1' where id=$id;";//數量減少
	mysqli_query($conn,$sqlm) or die("MySQL query error");
	header("Location: 02.list.php");
}
else if($rsp['id']=='6'&&($rsp['qty']>=1)){ //土地
	$sqll = "update package set qty=qty-'1' where id=$id;";//數量減少
	mysqli_query($conn,$sqll) or die("MySQL query error");
	header("Location: 02.list.php");
}
else{
	header("Location: 02.list.php");
}

	
?>
</body>
</html>
