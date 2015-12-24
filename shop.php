<?php 
require("config.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>商店</title>
</head>
<style type="text/css">
h1 { text-align: center}
#menu{position:absolute;top:100px;left:1150px; }
</style>
<body>
<table  width="1000" >
<tr>
	<td><h1>商品</h1></td>
	<td><h1>體力</h1></td>
	<td><h1>價錢</h1></td>
	<td><h1>經驗</h1></td>
	<td><h1>是否購買</h1></td>
<tr/>
<tr>
	<td><h1><img src="carrot.png" alt="carrot" height="80" width="80">10秒</h1></td>
	<td><h1><img src="love.png" alt="love" height="60" width="60"> -1</h1></td>
	<td><h1><img src="coin.png" alt="coin" height="80" width="80">-20</h1></td>
	<td><h1><img src="exp.png" alt="exp" height="80" width="80">+30</h1></td>
	<?php
	$sqlc = "select * from package where id='1';";
	$results=mysqli_query($conn,$sqlc);
	if ($rs=mysqli_fetch_array($results)) {
	echo"<td><h1><a href='up_package.php?id=",$rs['id'],"'>購買</a></h1></td>";
	}
	?>	
<tr/>
<tr>
	<td><h1><img src="mushroom.png" alt="mushroom" height="80" width="80">30秒</h1></td>
	<td><h1><img src="love.png" alt="love" height="60" width="60"> -1</h1></td>
	<td><h1><img src="coin.png" alt="coin" height="80" width="80">-40</h1></td>
	<td><h1><img src="exp.png" alt="exp" height="80" width="80">+50</h1></td>
	<?php
	$sqlc = "select * from package where id='2';";
	$results=mysqli_query($conn,$sqlc);
	if ($rs=mysqli_fetch_array($results)) {
	echo"<td><h1><a href='up_package.php?id=",$rs['id'],"'>購買</a></h1></td>";
	}
	?>
<tr/>
<tr>
	<td><h1><img src="eggplant.png" alt="eggplant" height="80" width="80">50秒</h1></td>
	<td><h1><img src="love.png" alt="love" height="60" width="60"> -1</h1></td>
	<td><h1><img src="coin.png" alt="coin" height="80" width="80">-40</h1></td>
	<td><h1><img src="exp.png" alt="exp" height="80" width="80">+60</h1></td>
	<?php
	$sqlc = "select * from package where id='3';";
	$results=mysqli_query($conn,$sqlc);
	if ($rs=mysqli_fetch_array($results)) {
	echo"<td><h1><a href='up_package.php?id=",$rs['id'],"'>購買</a></h1></td>";
	}
	?>
<tr/>
<tr>
	<td><h1><img src="corn.png" alt="corn" height="80" width="80">60秒</h1></td>
	<td><h1><img src="love.png" alt="love" height="60" width="60"> -1</h1></td>
	<td><h1><img src="coin.png" alt="coin" height="80" width="80">-50</h1></td>
	<td><h1><img src="exp.png" alt="exp" height="80" width="80">+80</h1></td>
	<?php
	$sqlc = "select * from package where id='4';";
	$results=mysqli_query($conn,$sqlc);
	if ($rs=mysqli_fetch_array($results)) {
	echo"<td><h1><a href='up_package.php?id=",$rs['id'],"'>購買</a></h1></td>";
	}
	?>
<tr/>
<tr>
	<td><h1><img src="meat.png" alt="meat" height="80" width="80">   </h1></td>
	<td><h1><img src="love.png" alt="love" height="60" width="60"> +1</h1></td>
	<td><h1><img src="coin.png" alt="coin" height="80" width="80">-50</h1></td>
	<td><h1>	</h1></td>
	<?php
	$sqlc = "select * from package where id='5';";
	$results=mysqli_query($conn,$sqlc);
	if ($rs=mysqli_fetch_array($results)) {
	echo"<td><h1><a href='up_package.php?id=",$rs['id'],"'>購買</a></h1></td>";
	}
	?>
	
<tr/>
<?php
$sql = "select * from user;";
$results=mysqli_query($conn,$sql);
if ($rs=mysqli_fetch_array($results)) {
?>
</table>
<div id="menu"  >
	<p><h1><img src="coin.png" alt="coin" height="100" width="100"></h1></p>
	<p><h1><?php echo $rs['cashinhand']; ?></h1> </p>
	<p><h1><a href="02.list.php"><img src="package.jpg" alt="package" height="100" width="100"></h1></p>
	<p><h1><a href="02.list.php"><img src="homeicon.png" alt="homeicon" height="100" width="100"></h1></p>
    
	</div>
<?php
}
?>

</body>
</html>
