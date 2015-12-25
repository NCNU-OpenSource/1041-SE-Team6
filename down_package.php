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
$sqluser = "select * from user ;";
$rsuser=mysqli_query($conn,$sqluser);
$rsu=mysqli_fetch_array($rsuser);
$sqlpack = "select * from package where id=$id;";
$rspack=mysqli_query($conn,$sqlpack);
$rsp=mysqli_fetch_array($rspack);

if($rsp['id']<=4&&($rsp['qty']>=1)){
	
	if($rsu['lovecount']>=$rsp['item_hp']){ //檢查夠不夠心
		$sql ="update user set lovecount=lovecount-".$rsp['item_hp'].";"; //user的心減少
		mysqli_query($conn,$sql) or die("MySQL query error");
		$sql = "update package set qty=qty-1 where id=$id;";//數量減少
		mysqli_query($conn,$sql) or die("MySQL query error");
		$sql ="update user set exp=exp+".$rsp['item_exp'].";"; //經驗增加
		mysqli_query($conn,$sql) or die("MySQL query error");
		header("Location: 02.list.php");
	}
}

	
if($rsp['id']=5&&($rsp['qty']>=1)){
	    $sql ="update user set lovecount=lovecount+1;"; //user的心+1
		mysqli_query($conn,$sql) or die("MySQL query error");
		$sql = "update package set qty=qty-1 where id=$id;";//數量減少
		mysqli_query($conn,$sql) or die("MySQL query error");
		header("Location: 02.list.php");
}
if($rsp['id']=6&&($rsp['qty']>=1)){
	    
		$sql = "update package set qty=qty-1 where id=$id;";//數量減少
		mysqli_query($conn,$sql) or die("MySQL query error");
		header("Location: 02.list.php");
}


	
?>
</body>
</html>
