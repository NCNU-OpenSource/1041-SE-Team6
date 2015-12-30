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

$iid=(int)$_GET['iid'];
$lid=(int)$_GET['lid'];

$userid=$_SESSION['uID'];
$sqluser = "select * from user where id='".$userid."' ;";
$rsuser=mysqli_query($conn,$sqluser);
$rsu=mysqli_fetch_array($rsuser);
$sqlpack = "select * from package where id=$iid;";
$rspack=mysqli_query($conn,$sqlpack);
$rsp=mysqli_fetch_array($rspack);



	if($iid=='1' ){ //1=carrot
		$sql ="update user set cashinhand=cashinhand+".$rsp['item_outprice']." where id='".$userid."';"; //cashinhand增加
		mysqli_query($conn,$sql) or die("MySQL query error");
		$sql= "update land set status='1' where id='".$lid."';"; //將land的status設為1(田)
		mysqli_query($conn,$sql) or die("MySQL query error");
		$sql= "update land set item_onland='0' where id='".$lid."';"; //將item_onland設為0
		mysqli_query($conn,$sql) or die("MySQL query error");
		$sql= "update land set endtime='0' where id='".$lid."';"; //將endtime設為0
		mysqli_query($conn,$sql) or die("MySQL query error");
		header("Location:02.list.php");
	}
	else if($iid=='2' ){ //2=mushroom
		$sql ="update user set cashinhand=cashinhand+".$rsp['item_outprice']." where id='".$userid."';"; //cashinhand增加
		mysqli_query($conn,$sql) or die("MySQL query error");
		$sql= "update land set status='1' where id='".$lid."';"; //將land的status設為1(田)
		mysqli_query($conn,$sql) or die("MySQL query error");
		$sql= "update land set item_onland='0' where id='".$lid."';"; //將item_onland設為0
		mysqli_query($conn,$sql) or die("MySQL query error");
		$sql= "update land set endtime='0' where id='".$lid."';"; //將endtime設為0
		mysqli_query($conn,$sql) or die("MySQL query error");
		header("Location:02.list.php");
	}
	else if($iid=='3'){ //3=eggplant
		$sql ="update user set cashinhand=cashinhand+".$rsp['item_outprice']." where id='".$userid."';"; //cashinhand增加
		mysqli_query($conn,$sql) or die("MySQL query error");
		$sql= "update land set status='1' where id='".$lid."';"; //將land的status設為1(田)
		mysqli_query($conn,$sql) or die("MySQL query error");
		$sql= "update land set item_onland='0' where id='".$lid."';"; //將item_onland設為0
		mysqli_query($conn,$sql) or die("MySQL query error");
		$sql= "update land set endtime='0' where id='".$lid."';"; //將endtime設為0
		mysqli_query($conn,$sql) or die("MySQL query error");
		header("Location:02.list.php");

	}
	else if($iid=='4' ){//4=corn
		$sql ="update user set cashinhand=cashinhand+".$rsp['item_outprice']." where id='".$userid."';"; //cashinhand增加
		mysqli_query($conn,$sql) or die("MySQL query error");
		$sql= "update land set status='1' where id='".$lid."';"; //將land的status設為1(田)
		mysqli_query($conn,$sql) or die("MySQL query error");
		$sql= "update land set item_onland='0' where id='".$lid."';"; //將item_onland設為0
		mysqli_query($conn,$sql) or die("MySQL query error");
		$sql= "update land set endtime='0' where id='".$lid."';"; //將endtime設為0
		mysqli_query($conn,$sql) or die("MySQL query error");
		header("Location:02.list.php");
	}
	else{
		header("Location: 02.list.php");
	}	
?>
</body>
</html>
