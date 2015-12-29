<?php 
require("config.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>harvest</title>
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



	if($id=='1' ){
		
		$sql ="update user set exp=exp+".$rsp['item_exp']." where id='".$userid."';"; //經驗增加
		mysqli_query($conn,$sql) or die("MySQL query error");
		
		$sql= "update land set status='1' where id='".$lid."';"; //將land的status設為1(田)
		mysqli_query($conn,$sql) or die("MySQL query error");
		
		header("Location:02.list.php");
	}
	else if($id=='2' ){
		$sql ="update user set exp=exp+".$rsp['item_exp']." where id='".$userid."';"; //經驗增加
		mysqli_query($conn,$sql) or die("MySQL query error");
		
		$sql= "update land set status='1' where id='".$lid."';"; //將land的status設為1(田)
		mysqli_query($conn,$sql) or die("MySQL query error");
		
		header("Location:02.list.php");
	}
	else if($id=='3'){
		$sql ="update user set exp=exp+".$rsp['item_exp']." where id='".$userid."';"; //經驗增加
		mysqli_query($conn,$sql) or die("MySQL query error");
		
		$sql= "update land set status='1' where id='".$lid."';"; //將land的status設為1(田)
		mysqli_query($conn,$sql) or die("MySQL query error");
		
		header("Location:02.list.php");

	}
	else if($id=='4' ){
		$sql ="update user set exp=exp+".$rsp['item_exp']." where id='".$userid."';"; //經驗增加
		mysqli_query($conn,$sql) or die("MySQL query error");
		
		$sql= "update land set status='1' where id='".$lid."';"; //將land的status設為1(田)
		mysqli_query($conn,$sql) or die("MySQL query error");
		
		header("Location:02.list.php");
	}
	
	

else{
	header("Location: 02.list.php");
}

	
?>
</body>
</html>
