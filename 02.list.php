<?php 
require("config.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>主畫面</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  
 
</head>
<style type="text/css">
h1 {padding:5px;  text-align: center}
#content{position:absolute;top: 200px;left:600px;}
#lovecount{position:absolute;top: 40px;left:535px;font-size: 20pt}
#coincount{position:absolute;top: 40px;left:680px;font-size: 20pt}
#level{position:absolute;top: 40px;left:210px;font-size: 20pt}
#lv{position:absolute;top: 40px;left:155px;font-size: 20pt}
#progressbar{position:fixed;top:40px;left:240px;font-size: 10pt; }
#package{position:fixed;top:300px;left:200px; }

 body {
  width: 380px ;
 margin:175px auto; 
 }
  
 .shop{
position:absolute;
}
.ctrl{
position:absolute;
}
.people{
position:absolute;
}
.coin{
position:absolute;
}
.love{
position:absolute;
}
</style>
<script type="text/javascript">



window.onload=function() {
    shop.style.top=30+"px";
    shop.style.left=900+"px";
	ctrl.style.top=30+"px";
    ctrl.style.left=1000+"px";
	people.style.top=10+"px";
    people.style.left=50+"px";
	coin.style.top=30+"px";
    coin.style.left=600+"px";
	love.style.top=30+"px";
    love.style.left=450+"px";
	
	
	
	
};



</script>
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#progressbar" ).progressbar({
		
		<?php
       $sql = "select * from user;";
       $results=mysqli_query($conn,$sql);
       if ($rs=mysqli_fetch_array($results)) {
       ?>
      value: <?php echo $rs['exp']; ?>
	  <?php
	   }
	    ?>
    });
  });
  
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




<body  style="background-color:#63FF63" >
<?php
$sqluser = "select * from user ;";
$rsuser=mysqli_query($conn,$sqluser);
$rsu=mysqli_fetch_array($rsuser);
	
if($rsu['exp']>=100){
	$sql ="update user set level=level+'1';";
	mysqli_query($conn,$sql) or die("MySQL query error"); 
	$sql ="update user set exp=exp-'100';";
	mysqli_query($conn,$sql) or die("MySQL query error");
	header("Location: 02.list.php");
}
?>
<a href="shop.php"><img id="shop" src="shop.png" alt="shop" class="shop" height="100" width="100"></a>
<a href="login.php"><img id="ctrl" src="ctrl.png" alt="logout" class="ctrl" height="100" width="100"></a>
<img id="people" src="people.png" alt="people" class="people" height="100" width="100">
<img id="coin" src="coin.png" alt="coin" class="coin" height="50" width="50">
<img id="love" src="love.png" alt="love" class="love" height="50" width="50">

<div id="package"  >
<img id="opener" src="package.png" alt="package" class="package" height="150" width="150">
</div>

<div id="progressbar" style="width:180px" ></div>

<div id="dialog" title="背包">
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
	</br>
	<?php
	$sqlc = "select * from package where id='1';";
	$results=mysqli_query($conn,$sqlc);
	if ($rs=mysqli_fetch_array($results)) {
	echo"<a href='down_package.php?id=",$rs['id'],"'>使用</a>";
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
	?></br>
	<?php
	$sqlc = "select * from package where id='2';";
	$results=mysqli_query($conn,$sqlc);
	if ($rs=mysqli_fetch_array($results)) {
	echo"<a href='down_package.php?id=",$rs['id'],"'>使用</a>";
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
	?></br>
	<?php
	$sqlc = "select * from package where id='3';";
	$results=mysqli_query($conn,$sqlc);
	if ($rs=mysqli_fetch_array($results)) {
	echo"<a href='down_package.php?id=",$rs['id'],"'>使用</a>";
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
	?></br>
	<?php
	$sqlc = "select * from package where id='4';";
	$results=mysqli_query($conn,$sqlc);
	if ($rs=mysqli_fetch_array($results)) {
	echo"<a href='down_package.php?id=",$rs['id'],"'>使用</a>";
	}
	?>	
	</td>
	<td><img src="meat.png" alt="meat" height="100" width="100"></br>
	數量：
	<?php
	$sql = "select * from package where id='5';";
	$results=mysqli_query($conn,$sql);
	if ($rs=mysqli_fetch_array($results)) {
		echo $rs['qty'];
	}
	?></br>
	<?php
	$sqlc = "select * from package where id='5';";
	$results=mysqli_query($conn,$sqlc);
	if ($rs=mysqli_fetch_array($results)) {
	echo"<a href='down_package.php?id=",$rs['id'],"'>使用</a>";
	}
	?>	
	</td>
</tr>
</table>  
  
</div>
 




<?php
$sql = "select * from user;";
$results=mysqli_query($conn,$sql);
if ($rs=mysqli_fetch_array($results)) {
?>
<div id="coincount">
<?php echo $rs['cashinhand']; ?>
</div>
<div id="lovecount">
<?php echo $rs['lovecount']; ?>
</div>
<div id="level">
<?php echo $rs['level']; ?>
</div>

<?php
}
?>


<div id="lv">LV.</div>
<div id="content">
<table>
  <tr>
    <td><img  src="p2.png" alt="田"  height="100" width="100"/>  </td> 	
    <td><img src="p2.png" alt="田" height="100" width="100"/>
	
	</td>
    <td><img src="p3.png" alt="草" height="100" width="100"/>  </td> 	 
    <td><img src="p3.png" alt="草" height="100" width="100"/>  </td>
   </tr>
   <tr>
    <td><img src="p2.png" alt="田" height="100" width="100"/>  </td> 	
    <td><img src="p2.png" alt="田" height="100" width="100"/>  </td>
    <td><img src="p3.png" alt="草" height="100" width="100"/>  </td> 	 
    <td><img src="p3.png" alt="草" height="100" width="100"/>  </td>
   </tr>
	<tr>
    <td><img src="p3.png" alt="草" height="100" width="100"/>  </td> 	
    <td><img src="p3.png" alt="草" height="100" width="100"/>  </td>
    <td><img src="p3.png" alt="草" height="100" width="100"/>  </td> 	 
    <td><img src="p3.png" alt="草" height="100" width="100"/>  </td>
   </tr>
</div>   
<?php
$uerid=$_SESSION['uID'];
$sql2="select  * from user where id =$uerid;";
$results2=mysqli_query($conn,$sql2);//跟sql2指令連結
?>
</body>
</table>

</html>
