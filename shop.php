<?php 
require("config.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>商店</title>
</head>
<style type="text/css">
#lovecount{position:absolute;top: 40px;left:535px;font-size: 20pt}
#coincount{position:absolute;top: 40px;left:680px;font-size: 20pt}
#level{position:absolute;top: 40px;left:210px;font-size: 20pt}
#lv{position:absolute;top: 40px;left:155px;font-size: 20pt}

body {
width:500 ;
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

<body style="background-color:#63FF63">
<a href="shop.php"><img id="shop" src="shop.png" alt="shop" class="shop" height="100" width="100"></a>
<a href="login.php"><img id="ctrl" src="ctrl.png" alt="logout" class="ctrl" height="100" width="100"></a>
<img id="people" src="people.png" alt="people" class="people" height="100" width="100">
<img id="coin" src="coin.jpg" alt="coin" class="coin" height="50" width="50">
<img id="love" src="love.png" alt="love" class="love" height="50" width="50">
<div id="lovecount">
</div>
<div id="coincount">
</div>
<div id="level">
</div>
<div id="lv">LV.</div>

<div id="mainshop">
<table  border="1" width="500">
<caption><big>商店</big></caption>
<tr>
	<th>物品圖樣</th>
	<th>生命數</th>
	<th>金錢</th>
	<th>經驗值</th>
	<th>點選</th>
</tr>
<tr>
	<td><img src="carrot.png" alt="carrot" height="80" width="80"></td>
	<td><img src="love.png" alt="love" height="60" width="60"> -1</td>
	<td><img src="coin.png" alt="coin" height="80" width="80">-20</td>
	<td><img src="exp.png" alt="exp" height="80" width="80">+30</td>
	<td></td>
<tr/>
</table>
</div>

</body>
</html>