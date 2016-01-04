<?php 
require("config.php");

if(isset ($_SESSION['Money'])){
	unset($_SESSION['Money']);
	echo "<script>alert('金錢不夠啦');</script>";	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>商店</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  

</head>
<style type="text/css">

h1 { text-align: center}
body {
	background-image:url(img\\p4.png);
	background-attachment:fixed;
	background-repeat: no-repeat;
} 
table{position:absolute;top: 20px;left:10px;}
#menu{position:absolute;top:60px;left:1100px;}
</style>
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#dialog" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind", 
		
      },
      hide: {
        effect: "blind",
		
      }
    }); 
	
    $( "#opener" ).click(function() {
      $( "#dialog" ).dialog( "open" );
    });
  });
  
</script>

<body>
<table  width="1000" height="200">
<tr>
	<td><h1><img src="img\carrot.png" alt="carrot" height="50" width="50">10秒</h1></td>
	<td><h1><img src="img\love.png" alt="love" height="50" width="50"> -1</h1></td>
	<td><h1><img src="img\coin.png" alt="coin" height="50" width="50">-20</h1></td>
	<td><h1><img src="img\exp.png" alt="exp" height="50" width="50">+30</h1></td>
	<td><h1>30元</h1></td>
	<?php
	
		
	$sqlc = "select * from package where id='1';";
	$results=mysqli_query($conn,$sqlc);	
	if ($rs=mysqli_fetch_array($results)) {
		
	echo"<td><h1><a href='up_package.php?id=",$rs['id'],"'>購買</a></h1></td>";
	}
	
	?>	
</tr>
<tr>
	<td><h1><img src="img\mushroom.png" alt="mushroom" height="50" width="50">30秒</h1></td>
	<td><h1><img src="img\love.png" alt="love" height="50" width="50"> -1</h1></td>
	<td><h1><img src="img\coin.png" alt="coin" height="50" width="50">-40</h1></td>
	<td><h1><img src="img\exp.png" alt="exp" height="50" width="50">+50</h1></td>
	<td><h1>60元</h1></td>
	<?php
	
	$userid=$_SESSION['uID'];
	$sqluser = "select * from user where id='".$userid."' ;";
    $rsuser=mysqli_query($conn,$sqluser);
    $rsu=mysqli_fetch_array($rsuser);
	 
	if($rsu['level']>='3'){
	
	$sqlc = "select * from package where id='2';";
	$results=mysqli_query($conn,$sqlc);
	if ($rs=mysqli_fetch_array($results)) {
	echo"<td><h1><a href='up_package.php?id=",$rs['id'],"'>購買</a></h1></td>";
	}
	}
	else{
		echo"<td><h1>未解鎖</h1></td>";
	}
	
	?>
</tr>
<tr>
	<td><h1><img src="img\eggplant.png" alt="eggplant" height="50" width="50">50秒</h1></td>
	<td><h1><img src="img\love.png" alt="love" height="50" width="50"> -1</h1></td>
	<td><h1><img src="img\coin.png" alt="coin" height="50" width="50">-40</h1></td>
	<td><h1><img src="img\exp.png" alt="exp" height="50" width="50">+60</h1></td>
	<td><h1>70元</h1></td>
	<?php
	$userid=$_SESSION['uID'];
	$sqluser = "select * from user where id='".$userid."' ;";
    $rsuser=mysqli_query($conn,$sqluser);
    $rsu=mysqli_fetch_array($rsuser);
	 
	if($rsu['level']>='5'){
	$sqlc = "select * from package where id='3';";
	$results=mysqli_query($conn,$sqlc);
	if ($rs=mysqli_fetch_array($results)) {
	echo"<td><h1><a href='up_package.php?id=",$rs['id'],"'>購買</a></h1></td>";
	}
	}
	else{
		echo"<td><h1>未解鎖</h1></td>";
	}
	?>
</tr>
<tr>
	<td><h1><img src="img\corn.png" alt="corn" height="50" width="50">60秒</h1></td>
	<td><h1><img src="img\love.png" alt="love" height="50" width="50"> -1</h1></td>
	<td><h1><img src="img\coin.png" alt="coin" height="50" width="50">-50</h1></td>
	<td><h1><img src="img\exp.png" alt="exp" height="50" width="50">+80</h1></td>
	<td><h1>90元</h1></td>
	<?php
	$userid=$_SESSION['uID'];
	$sqluser = "select * from user where id='".$userid."' ;";
    $rsuser=mysqli_query($conn,$sqluser);
    $rsu=mysqli_fetch_array($rsuser);
	 
	if($rsu['level']>='9'){
	$sqlc = "select * from package where id='4';";
	$results=mysqli_query($conn,$sqlc);
	if ($rs=mysqli_fetch_array($results)) {
	echo"<td><h1><a href='up_package.php?id=",$rs['id'],"'>購買</a></h1></td>";
	}
	}
	else{
		echo"<td><h1>未解鎖</h1></td>";
	}
	?>
</tr>
<tr>
	<td><h1><img src="img\meat.png" alt="meat" height="50" width="50">   </h1></td>
	<td><h1><img src="img\love.png" alt="love" height="50" width="50"> +1</h1></td>
	<td><h1><img src="img\coin.png" alt="coin" height="50" width="50">-50</h1></td>
	<td>	</td>
	<td><h1>50元</h1></td>
	<?php
	$sqlc = "select * from package where id='5';";
	$results=mysqli_query($conn,$sqlc);
	if ($rs=mysqli_fetch_array($results)) {
	echo"<td><h1><a href='up_package.php?id=",$rs['id'],"'>購買</a></h1></td>";
	}
	?>
	
</tr>
<tr>
	<td><h1><img src="img\land.png" alt="land" height="50" width="50">   </h1></td>
	<td>	</td>
	<td><h1><img src="img\coin.png" alt="coin" height="50" width="50">-50</h1></td>
	<td>	</td>
	<td>	</td>
	<?php
	$sqlc = "select * from package where id='6';";
	$results=mysqli_query($conn,$sqlc);
	if ($rs=mysqli_fetch_array($results)) {
	echo"<td><h1><a href='up_package.php?id=",$rs['id'],"'>購買</a></h1></td>";
	}
	?>
	
</tr>
</table>
<?php
$userid=$_SESSION['uID'];
$sql = "select * from user where id='".$userid."';";
$results=mysqli_query($conn,$sql);

if ($rs=mysqli_fetch_array($results)) {
?>
<div id="menu"  >
	<p><img src="img\coin.png" alt="coin" height="150" width="150"></p>
	<p><h1>NT <?php echo $rs['cashinhand']; ?></h1> </p>
	<p><img id="opener" src="img\package.png" alt="package" class="package" height="150" width="150"></p>
	<p><a href="02.list.php"><img src="img\homeicon.png" alt="homeicon" height="150" width="150"></p>    
</div>
<?php
}
?>

<div id="dialog" title="背包" height="100"> <!--背包的內容-->
<table>
<tr>
	<td><img src="img\carrot.png" alt="carrot" height="100" width="100"> 
	</br>
	種植時間：
	<?php
	$sql ="select item_time from package where id='1';";
	$results=mysqli_query($conn,$sql);
	$rs=mysqli_fetch_array($results);
	echo $rs['item_time'];
	?>
	</br>
	數量：
	<?php
	$sql = "select carrot_qty from user where id='".$userid."';";
	$results=mysqli_query($conn,$sql);
	$rs=mysqli_fetch_array($results);
	echo $rs['carrot_qty'];
	?>
	</br>
	出售價：
	<?php
	$sql ="select item_outprice from package where id='1';";
	$results=mysqli_query($conn,$sql);
	$rs=mysqli_fetch_array($results);
	echo $rs['item_outprice'];
	?>
	</td>
	<td><img src="img\mushroom.png" alt="mushroom" height="100" width="100">
	</br>
	種植時間：
	<?php
	$sql ="select item_time from package where id='2';";
	$results=mysqli_query($conn,$sql);
	$rs=mysqli_fetch_array($results);
	echo $rs['item_time'];
	?>
	</br>
	數量：
	<?php
	$sql = "select mushroom_qty from user where id='".$userid."';";
	$results=mysqli_query($conn,$sql);
	$rs=mysqli_fetch_array($results);
	echo $rs['mushroom_qty'];
	?>
	</br>
	出售價：
	<?php
	$sql ="select item_outprice from package where id='2';";
	$results=mysqli_query($conn,$sql);
	$rs=mysqli_fetch_array($results);
	echo $rs['item_outprice'];
	?>
	</td>	
	<td><img src="img\eggplant.png" alt="eggplant" height="100" width="100">
	</br>
	種植時間：
	<?php
	$sql ="select item_time from package where id='3';";
	$results=mysqli_query($conn,$sql);
	$rs=mysqli_fetch_array($results);
	echo $rs['item_time'];
	?>
	</br>
	數量：
	<?php
	$sql = "select eggplant_qty from user where id='".$userid."';";
	$results=mysqli_query($conn,$sql);
	$rs=mysqli_fetch_array($results);
	echo $rs['eggplant_qty'];
	?>
	</br>
	出售價：
	<?php
	$sql ="select item_outprice from package where id='3';";
	$results=mysqli_query($conn,$sql);
	$rs=mysqli_fetch_array($results);
	echo $rs['item_outprice'];
	?>
	</td>
	<td><img src="img\corn.png" alt="corn" height="100" width="100">
	</br>
	種植時間：
	<?php
	$sql ="select item_time from package where id='4';";
	$results=mysqli_query($conn,$sql);
	$rs=mysqli_fetch_array($results);
	echo $rs['item_time'];
	?>
	</br>
	數量：
	<?php
	$sql = "select corn_qty from user where id='".$userid."';";
	$results=mysqli_query($conn,$sql);
	$rs=mysqli_fetch_array($results);
	echo $rs['corn_qty'];
	?>
	</br>
	出售價：
	<?php
	$sql ="select item_outprice from package where id='4';";
	$results=mysqli_query($conn,$sql);
	$rs=mysqli_fetch_array($results);
	echo $rs['item_outprice'];
	?>	
	</td>
	<td><img src="img\meat.png" alt="meat" height="100" width="100">
	</br>
	數量：
	<?php
	$sql = "select meat_qty from user where id='".$userid."';";
	$results=mysqli_query($conn,$sql);
	$rs=mysqli_fetch_array($results);
	echo $rs['meat_qty'];
	?>	
	</td>
	<td><img src="img\land.png" alt="land" height="100" width="100">
	</br>
	數量：
	<?php
	$sql = "select land_qty from user where id='".$userid."';";
	$results=mysqli_query($conn,$sql);
	$rs=mysqli_fetch_array($results);
	echo $rs['land_qty'];
	?>	
	</td>
</tr>
</table>  
</div>

</body>
</html>
