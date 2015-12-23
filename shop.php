<?php 
require("config.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>商店</title>
</head>

<body>

<table border="1" width="500">
<tr>
	<th colspan="5">商店</th>
</tr>
<tr>
	<td><img src="land.png" alt="land" height="80" width="80"></td>
	<td>	</td>
	<td><img src="coin.png" alt="coin" height="80" width="80">-50</td>
	<td>	</td>
	<td>購買</td>
<tr/>
<tr>
	<td><img src="carrot.png" alt="carrot" height="80" width="80"></td>
	<td><img src="love.png" alt="love" height="60" width="60"> -1</td>
	<td><img src="coin.png" alt="coin" height="80" width="80">-20</td>
	<td><img src="exp.png" alt="exp" height="80" width="80">+30</td>
	<td>購買</td>
<tr/>
<tr>
	<td><img src="mushroom.png" alt="mushroom" height="80" width="80"></td>
	<td><img src="love.png" alt="love" height="60" width="60"> -1</td>
	<td><img src="coin.png" alt="coin" height="80" width="80">-40</td>
	<td><img src="exp.png" alt="exp" height="80" width="80">+50</td>
	<td>購買</td>
<tr/>
<tr>
	<td><img src="eggplant.png" alt="eggplant" height="80" width="80"></td>
	<td><img src="love.png" alt="love" height="60" width="60"> -1</td>
	<td><img src="coin.png" alt="coin" height="80" width="80">-40</td>
	<td><img src="exp.png" alt="exp" height="80" width="80">+60</td>
	<td>購買</td>
<tr/>
<tr>
	<td><img src="corn.png" alt="corn" height="80" width="80"></td>
	<td><img src="love.png" alt="love" height="60" width="60"> -1</td>
	<td><img src="coin.png" alt="coin" height="80" width="80">-50</td>
	<td><img src="exp.png" alt="exp" height="80" width="80">+80</td>
	<td>購買</td>
<tr/>
<tr>
	<td><img src="meat.png" alt="meat" height="80" width="80"></td>
	<td><img src="love.png" alt="love" height="60" width="60"> +1</td>
	<td><img src="coin.png" alt="coin" height="80" width="80">-50</td>
	<td>	</td>
	<td>購買</td>
<tr/>
<?php
$sql = "select * from user;";
$results=mysqli_query($conn,$sql);
if ($rs=mysqli_fetch_array($results)) {
?>
<tr>
	<td>NT: <?php echo $rs['cashinhand']; ?></td>
	<td colspan="3"> </td>
	<td><a href="02.list.php"><img src="homeicon.png" alt="homeicon" height="50" width="50"></td>
</tr>
<?php
}
?>
</table>



</body>
</html>