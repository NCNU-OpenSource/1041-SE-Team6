<?php 
require("config.php");
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
#menu{position:absolute;top:100px;left:1000px; }
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
<table  width="800" >
<tr>
	<td><h1>商品</h1></td>
	<td><h1>體力</h1></td>
	<td><h1>價錢</h1></td>
	<td><h1>經驗</h1></td>
	<td><h1>出售價</h1></td>
	<td><h1>是否購買</h1></td>
	
<tr/>
<tr>
	<td><h1><img src="carrot.png" alt="carrot" height="80" width="80">10秒</h1></td>
	<td><h1><img src="love.png" alt="love" height="60" width="60"> -1</h1></td>
	<td><h1><img src="coin.png" alt="coin" height="80" width="80">-20</h1></td>
	<td><h1><img src="exp.png" alt="exp" height="80" width="80">+30</h1></td>
	<td><h1>30元</h1></td>
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
	<td><h1>60元</h1></td>
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
	<td><h1>70元</h1></td>
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
	<td><h1>90元</h1></td>
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
	<td>	</td>
	<td><h1>50元</h1></td>
	<?php
	$sqlc = "select * from package where id='5';";
	$results=mysqli_query($conn,$sqlc);
	if ($rs=mysqli_fetch_array($results)) {
	echo"<td><h1><a href='up_package.php?id=",$rs['id'],"'>購買</a></h1></td>";
	}
	?>
	
<tr/>
<tr>
	<td><h1><img src="land.png" alt="land" height="80" width="80">   </h1></td>
	<td>	</td>
	<td><h1><img src="coin.png" alt="coin" height="80" width="80">-50</h1></td>
	<td>	</td>
	<td>	</td>
	<?php
	$sqlc = "select * from package where id='6';";
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
	<p><h1><img src="coin.png" alt="coin" height="150" width="150"></h1></p>
	<p><h1>NT <?php echo $rs['cashinhand']; ?></h1> </p>
	<p><h1><img id="opener" src="package.jpg" alt="package" class="package" height="150" width="150"></h1></p>
	<p><h1><a href="02.list.php"><img src="homeicon.png" alt="homeicon" height="150" width="150"></h1></p>
    
	</div>
<?php
}
?>
<div id="dialog" title="背包" width="800">
<table>
<tr>
	<td><img src="carrot.png" alt="carrot" height="100" width="100"></br>
	數量：
	<?php
	$sql = "select * from package where id='1';";
	$results=mysqli_query($conn,$sql);
	if ($rs=mysqli_fetch_array($results)) {
		echo $rs['qty'];
	}
	?>
	</td>
	<td><img src="mushroom.png" alt="mushroom" height="100" width="100"></br>
	數量：
	<?php
	$sql = "select * from package where id='2';";
	$results=mysqli_query($conn,$sql);
	if ($rs=mysqli_fetch_array($results)) {
		echo $rs['qty'];
	}
	?>
	</td>
	<td><img src="eggplant.png" alt="eggplant" height="100" width="100"></br>
	數量：
	<?php
	$sql = "select * from package where id='3';";
	$results=mysqli_query($conn,$sql);
	if ($rs=mysqli_fetch_array($results)) {
		echo $rs['qty'];
	}
	?>
	</td>

	<td><img src="corn.png" alt="corn" height="100" width="100"></br>
	數量：
	<?php
	$sql = "select * from package where id='4';";
	$results=mysqli_query($conn,$sql);
	if ($rs=mysqli_fetch_array($results)) {
		echo $rs['qty'];
	}
	?></td>
	
	
	<td><img src="meat.png" alt="meat" height="100" width="100"></br>
	數量：
	<?php
	$sql = "select * from package where id='5';";
	$results=mysqli_query($conn,$sql);
	if ($rs=mysqli_fetch_array($results)) {
		echo $rs['qty'];
	}
	?>
	</td>
	
	<td><img src="land.png" alt="land" height="100" width="100"></br>
	數量：
	<?php
	$sql = "select * from package where id='6';";
	$results=mysqli_query($conn,$sql);
	if ($rs=mysqli_fetch_array($results)) {
		echo $rs['qty'];
	}
	?>
	</td>
</tr>
</table>  
  
</div>
</body>
</html>
