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
$lid=(int)$_GET['lid'];

$userid=$_SESSION['uID'];
$sqluser = "select * from user where id='".$userid."' ;";
$rsuser=mysqli_query($conn,$sqluser);
$rsu=mysqli_fetch_array($rsuser);
$sqlpack = "select * from package where id=$id;";
$rspack=mysqli_query($conn,$sqlpack);
$rsp=mysqli_fetch_array($rspack);


if($rsu['lovecount']>=$rsp['item_hp']){ //檢查夠不夠心
	if($id=='1' && $rsu['carrot_qty']>='1'){
		$sql ="update user set lovecount=lovecount-".$rsp['item_hp']." where id='".$userid."';"; //user的心減少
		mysqli_query($conn,$sql) or die("MySQL query error");
		$sql ="update user set exp=exp+".$rsp['item_exp']." where id='".$userid."';"; //經驗增加
		mysqli_query($conn,$sql) or die("MySQL query error");
		$sql= "update user set carrot_qty=carrot_qty-1 where id='".$userid."';";//carrot數量減少
		mysqli_query($conn,$sql) or die("MySQL query error");
		$sql= "update land set status='2' where id='".$lid."';"; //將land的status設為2(種植中)
		mysqli_query($conn,$sql) or die("MySQL query error");
		$sql= "update land set item_onland='".$id."' where id='".$lid."';"; //將land的item_onland設為1(carrot)
		mysqli_query($conn,$sql) or die("MySQL query error");
		$sqlc = "select * from package where id='1';"; //設定倒數結束時間
		$results=mysqli_query($conn,$sqlc);
		$rsc=mysqli_fetch_array($results);
		$time=date('U');
		$time=$time+25200;
		$sqlat="update land set endtime=$time+".$rsc['item_time']." where id='".$lid."';";
		mysqli_query($conn,$sqlat)or die("MySQL query error");
		header("Location:02.list.php");
	}
	else if($id=='2' && $rsu['mushroom_qty']>='1'){
		$sql ="update user set lovecount=lovecount-".$rsp['item_hp']." where id='".$userid."';"; //user的心減少
		mysqli_query($conn,$sql) or die("MySQL query error");
		$sql ="update user set exp=exp+".$rsp['item_exp']." where id='".$userid."';"; //經驗增加
		mysqli_query($conn,$sql) or die("MySQL query error");
		$sql= "update user set mushroom_qty=mushroom_qty-1 where id='".$userid."';";//mushroom數量減少
		mysqli_query($conn,$sql) or die("MySQL query error");
		$sql= "update land set status='2' where id='".$lid."';"; //將land的status設為2(種植中)
		mysqli_query($conn,$sql) or die("MySQL query error");
		$sql= "update land set item_onland='".$id."' where id='".$lid."';"; //將land的item_onland設為2(mushroom)
		mysqli_query($conn,$sql) or die("MySQL query error");
		$sqlc = "select * from package where id='2';"; //設定倒數結束時間
		$results=mysqli_query($conn,$sqlc);
		$rsc=mysqli_fetch_array($results);
		$time=date('U');
		$time=$time+25200;
		$sqlat="update land set endtime=$time+".$rsc['item_time']." where id='".$lid."';";
		mysqli_query($conn,$sqlat)or die("MySQL query error");
		header("Location:02.list.php");
	}
	else if($id=='3' && $rsu['eggplant_qty']>='1'){
		$sql ="update user set lovecount=lovecount-".$rsp['item_hp']." where id='".$userid."';"; //user的心減少
		mysqli_query($conn,$sql) or die("MySQL query error");
		$sql ="update user set exp=exp+".$rsp['item_exp']." where id='".$userid."';"; //經驗增加
		mysqli_query($conn,$sql) or die("MySQL query error");
		$sql= "update user set eggplant_qty=eggplant_qty-1 where id='".$userid."';";//eggplant數量減少
		mysqli_query($conn,$sql) or die("MySQL query error");
		$sql= "update land set status='2' where id='".$lid."';"; //將land的status設為2(種植中)
		mysqli_query($conn,$sql) or die("MySQL query error");
		$sql= "update land set item_onland='".$id."' where id='".$lid."';"; //將land的item_onland設為3(eggplant)
		mysqli_query($conn,$sql) or die("MySQL query error");
		$sqlc = "select * from package where id='3';"; //設定倒數結束時間
		$results=mysqli_query($conn,$sqlc);
		$rsc=mysqli_fetch_array($results);
		$time=date('U');
		$time=$time+25200;
		$sqlat="update land set endtime=$time+".$rsc['item_time']." where id='".$lid."';";
		mysqli_query($conn,$sqlat)or die("MySQL query error");
		header("Location:02.list.php");

	}
	else if($id=='4' && $rsu['corn_qty']>='1'){
		$sql ="update user set lovecount=lovecount-".$rsp['item_hp']." where id='".$userid."';"; //user的心減少
		mysqli_query($conn,$sql) or die("MySQL query error");
		$sql ="update user set exp=exp+".$rsp['item_exp']." where id='".$userid."';"; //經驗增加
		mysqli_query($conn,$sql) or die("MySQL query error");
		$sql= "update user set corn_qty=corn_qty-1 where id='".$userid."';";//corn數量減少
		mysqli_query($conn,$sql) or die("MySQL query error");
		$sql= "update land set status='2' where id='".$lid."';"; //將land的status設為2(種植中)
		mysqli_query($conn,$sql) or die("MySQL query error");
		$sql= "update land set item_onland='".$id."' where id='".$lid."';"; //將land的item_onland設為4(corn)
		mysqli_query($conn,$sql) or die("MySQL query error");
		$sqlc = "select * from package where id='4';"; //設定倒數結束時間
		$results=mysqli_query($conn,$sqlc);
		$rsc=mysqli_fetch_array($results);
		$time=date('U');
		$time=$time+25200;
		$sqlat="update land set endtime=$time+".$rsc['item_time']." where id='".$lid."';";
		mysqli_query($conn,$sqlat)or die("MySQL query error");
		header("Location:02.list.php");
	}
	header("Location: 02.list.php");
}
else{
	$_SESSION['Love'] = 1;
	header("Location: 02.list.php");
}
if($id=='5' && $rsu['meat_qty']>='1'){
	$sql ="update user set lovecount=lovecount+'1' where id='".$userid."';"; //user的心增加
	mysqli_query($conn,$sql) or die("MySQL query error");
	$sql= "update user set meat_qty=meat_qty-1 where id='".$userid."';";//meat數量減少
	mysqli_query($conn,$sql) or die("MySQL query error");
	$sql= "update land set status='2' where id='".$lid."';"; //將land的status設為2(種植中)
	mysqli_query($conn,$sql) or die("MySQL query error");
	header("Location: 02.list.php");
}
if($id=='6' && $rsu['land_qty']>='1'){
	$sql= "update user set land_qty=land_qty-1 where id='".$userid."';";//land數量減少
	mysqli_query($conn,$sql) or die("MySQL query error");
	$sql= "update land set status='1' where id='".$lid."';"; //將land的status設為1(可種植)
	mysqli_query($conn,$sql) or die("MySQL query error");
	header("Location: 02.list.php");
}

	
?>
</body>
</html>
