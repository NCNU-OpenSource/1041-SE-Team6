<?php 
require("config.php");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>主畫面</title>
</head>
<style type="text/css">
h1 {padding:5px;  text-align: center}
#lovecount{position:absolute;top: 40px;left:535px;font-size: 20pt}
#coincount{position:absolute;top: 40px;left:680px;font-size: 20pt}
#level{position:absolute;top: 40px;left:210px;font-size: 20pt}
#lv{position:absolute;top: 40px;left:155px;font-size: 20pt}

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

var lovecount="5";
var coincount="100";
var level="1";

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
	document.getElementById("lovecount").innerHTML=lovecount;
	document.getElementById("coincount").innerHTML=coincount;
	document.getElementById("level").innerHTML=level;

};




document.getElementById("lovecount").innerHTML=lovecount;
document.getElementById("coincount").innerHTML=coincount;
document.getElementById("level").innerHTML=level;
</script>




<body  style="background-color:#63FF63" >

<a href="shop.php"><img id="shop" src="shop.png" class="shop" height="100" width="100"></a>
<a href="login.php"><img id="ctrl" src="ctrl.png" class="ctrl" height="100" width="100"></a>
<img id="people" src="people.png" class="people" height="100" width="100">
<img id="coin" src="coin.jpg" class="coin" height="50" width="50">
<img id="love" src="love.png" class="love" height="50" width="50">

<div id="lovecount">
</div>
<div id="coincount">
</div>
<div id="level">
</div>
<div id="lv">LV.</div>
<div id="content">
<table>
  <tr>
    <td><img src="p2.png" alt="田" height="80" width="80"/>  </td> 	
    <td><img src="p2.png" alt="田" height="80" width="80"/>  </td>
    <td><img src="p3.png" alt="草" height="80" width="80"/>  </td> 	 
    <td><img src="p3.png" alt="草" height="80" width="80"/>  </td>
   </tr>
   <tr>
    <td><img src="p2.png" alt="田" height="80" width="80"/>  </td> 	
    <td><img src="p2.png" alt="田" height="80" width="80"/>  </td>
    <td><img src="p3.png" alt="草" height="80" width="80"/>  </td> 	 
    <td><img src="p3.png" alt="草" height="80" width="80"/>  </td>
   </tr>
	<tr>
    <td><img src="p3.png" alt="草" height="80" width="80"/>  </td> 	
    <td><img src="p3.png" alt="草" height="80" width="80"/>  </td>
    <td><img src="p3.png" alt="草" height="80" width="80"/>  </td> 	 
    <td><img src="p3.png" alt="草" height="80" width="80"/>  </td>
   </tr>
   
<?php
$uerid=$_SESSION['uID'];
$sql2="select  * from user where id =$uerid;";
$results2=mysqli_query($conn,$sql2);//跟sql2指令連結

?>
</body>
</table>
</div>




</html>
