<?php 
require("config.php");

if(isset ($_SESSION['Love'])){
	unset($_SESSION['Love']);
	echo "<script>alert('愛心不足哦');</script>";
}
if(isset ($_SESSION['carq'])){
	unset($_SESSION['carq']);
	echo "<script>alert('蘿蔔不夠了');</script>";
}
if(isset ($_SESSION['musq'])){
	unset($_SESSION['musq']);
	echo "<script>alert('蘑菇不夠了');</script>";
}
if(isset ($_SESSION['eggq'])){
	unset($_SESSION['eggq']);
	echo "<script>alert('茄子不夠了');</script>";
}
if(isset ($_SESSION['corq'])){
	unset($_SESSION['corq']);
	echo "<script>alert('玉米不夠了');</script>";
}
if(isset ($_SESSION['meaq'])){
	unset($_SESSION['meaq']);
	echo "<script>alert('雞腿不夠了');</script>";
}
if(isset ($_SESSION['lanq'])){
	unset($_SESSION['lanq']);
	echo "<script>alert('土地不夠了');</script>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>主畫面</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script  type="text/javascript" src="countdown.min.js">
</script> 

</head>
<style type="text/css">
body{
	background-image:url(img/mainpage.jpg);
	background-repeat: no-repeat; 
}
h1 {padding:5px;  text-align: center}
#content{position:absolute;top: 200px;left:600px;}
#lovecount{position:absolute;top: 10px;left:635px;font-size: 20pt}
#coincount{position:absolute;top: 10px;left:780px;font-size: 20pt}
#level{position:absolute;top: 10px;left:360px;font-size: 20pt}
#lv{position:absolute;top: 10px;left:305px;font-size: 20pt}
#progressbar{position:fixed;top:70px;left:240px;font-size: 10pt; }
#package{position:fixed;top:300px;left:200px; }
#time1{position:fixed;top:250px;left:650px; }
#time2{position:fixed;top:250px;left:750px; }
#time3{position:fixed;top:250px;left:850px; }
#time4{position:fixed;top:250px;left:950px; }
#time5{position:fixed;top:350px;left:650px; }
#time6{position:fixed;top:350px;left:750px; }
#time7{position:fixed;top:350px;left:850px; }
#time8{position:fixed;top:350px;left:950px; }
#time9{position:fixed;top:450px;left:650px; }
#time10{position:fixed;top:450px;left:750px; }
#time11{position:fixed;top:450px;left:850px; }
#time12{position:fixed;top:450px;left:950px; }
#top{
    position:absolute;
    top: 110px;
    left:100px;
    font-size: 20pt
    text-align:center;
}  
#up{
	z-index:100;
    position:fixed;
    top: 80px;
    left:450px;
    font-size: 90pt
    text-align:center;
}  
 body {
	position:fixed ;
 left:10px; 
 margin:30px auto; 
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
    shop.style.top=0+"px";
    shop.style.left=1100+"px";
	ctrl.style.top=0+"px";
    ctrl.style.left=1200+"px";
	people.style.top=10+"px";
    people.style.left=80+"px";
	coin.style.top=0+"px";
    coin.style.left=700+"px";
	love.style.top=0+"px";
    love.style.left=550+"px";	
	
};
</script>
<?php
$sqlb= "select * from land where id=1";
$resultsb=mysqli_query($conn,$sqlb);
$rsb=mysqli_fetch_array($resultsb);
?>
<script>
function start1() {

	new Countdown({
		selector: '.timer1',
		msgBefore: "",
		msgAfter: "<?php echo "<a href='harvest.php?iid=".$rsb['item_onland']." &lid=".$rsb['id']."'><img src='img/shovel.gif' height='100' width='100'>";?>",
		msgPattern: "{seconds}",
		dateStart: new Date(),
		dateEnd:new Date('<?php echo date("M d, Y H:i:s",$rsb['endtime'])?>'),
		onStart: function() {
            console.log('start');
            },
		onEnd: function() { 
            console.log('end');
            },
	});

}
</script>
</script>
<?php
$sqlb= "select * from land where id=2";
$resultsb=mysqli_query($conn,$sqlb);
$rsb=mysqli_fetch_array($resultsb);
?>
<script>
function start2() {

	new Countdown({
		selector: '.timer2',
		msgBefore: "",
		msgAfter: "<?php echo "<a href='harvest.php?iid=".$rsb['item_onland']." &lid=".$rsb['id']."'><img src='img/shovel.gif' height='100' width='100'>";?>",
		msgPattern: "{seconds}",
		dateStart: new Date(),
		dateEnd:new Date('<?php echo date("M d, Y H:i:s",$rsb['endtime'])?>'),
		onStart: function() {
            console.log('start');
            },
		onEnd: function() { 
            console.log('end');
            },
	});

}
</script>
<?php
$sqlb= "select * from land where id=3";
$resultsb=mysqli_query($conn,$sqlb);
$rsb=mysqli_fetch_array($resultsb);
?>
<script>
function start3() {

	new Countdown({
		selector: '.timer3',
		msgBefore: "",
		msgAfter: "<?php echo "<a href='harvest.php?iid=".$rsb['item_onland']." &lid=".$rsb['id']."'><img src='img/shovel.gif' height='100' width='100'>";?>",
		msgPattern: "{seconds}",
		dateStart: new Date(),
		dateEnd:new Date('<?php echo date("M d, Y H:i:s",$rsb['endtime'])?>'),
		onStart: function() {
            console.log('start');
            },
		onEnd: function() { 
            console.log('end');
            },
	});

}
</script>
<?php
$sqlb= "select * from land where id=4";
$resultsb=mysqli_query($conn,$sqlb);
$rsb=mysqli_fetch_array($resultsb);
?>
<script>
function start4() {

	new Countdown({
		selector: '.timer4',
		msgBefore: "",
		msgAfter: "<?php echo "<a href='harvest.php?iid=".$rsb['item_onland']." &lid=".$rsb['id']."'><img src='img/shovel.gif' height='100' width='100'>";?>",
		msgPattern: "{seconds}",
		dateStart: new Date(),
		dateEnd:new Date('<?php echo date("M d, Y H:i:s",$rsb['endtime'])?>'),
		onStart: function() {
            console.log('start');
            },
		onEnd: function() { 
            console.log('end');
            },
	});

}
</script>
<?php
$sqlb= "select * from land where id=5";
$resultsb=mysqli_query($conn,$sqlb);
$rsb=mysqli_fetch_array($resultsb);
?>
<script>
function start5() {

	new Countdown({
		selector: '.timer5',
		msgBefore: "",
		msgAfter: "<?php echo "<a href='harvest.php?iid=".$rsb['item_onland']." &lid=".$rsb['id']."'><img src='img/shovel.gif' height='100' width='100'>";?>",
		msgPattern: "{seconds}",
		dateStart: new Date(),
		dateEnd:new Date('<?php echo date("M d, Y H:i:s",$rsb['endtime'])?>'),
		onStart: function() {
            console.log('start');
            },
		onEnd: function() { 
            console.log('end');
            },
	});

}
</script>
<?php
$sqlb= "select * from land where id=6";
$resultsb=mysqli_query($conn,$sqlb);
$rsb=mysqli_fetch_array($resultsb);
?>
<script>
function start6() {

	new Countdown({
		selector: '.timer6',
		msgBefore: "",
		msgAfter: "<?php echo "<a href='harvest.php?iid=".$rsb['item_onland']." &lid=".$rsb['id']."'><img src='img/shovel.gif' height='100' width='100'>";?>",
		msgPattern: "{seconds}",
		dateStart: new Date(),
		dateEnd:new Date('<?php echo date("M d, Y H:i:s",$rsb['endtime'])?>'),
		onStart: function() {
            console.log('start');
            },
		onEnd: function() { 
            console.log('end');
            },
	});

}
</script>
<?php
$sqlb= "select * from land where id=7";
$resultsb=mysqli_query($conn,$sqlb);
$rsb=mysqli_fetch_array($resultsb);
?>
<script>
function start7() {

	new Countdown({
		selector: '.timer7',
		msgBefore: "",
		msgAfter: "<?php echo "<a href='harvest.php?iid=".$rsb['item_onland']." &lid=".$rsb['id']."'><img src='img/shovel.gif' height='100' width='100'>";?>",
		msgPattern: "{seconds}",
		dateStart: new Date(),
		dateEnd:new Date('<?php echo date("M d, Y H:i:s",$rsb['endtime'])?>'),
		onStart: function() {
            console.log('start');
            },
		onEnd: function() { 
            console.log('end');
            },
	});

}
</script>
<?php
$sqlb= "select * from land where id=8";
$resultsb=mysqli_query($conn,$sqlb);
$rsb=mysqli_fetch_array($resultsb);
?>
<script>
function start8() {

	new Countdown({
		selector: '.timer8',
		msgBefore: "",
		msgAfter: "<?php echo "<a href='harvest.php?iid=".$rsb['item_onland']." &lid=".$rsb['id']."'><img src='img/shovel.gif' height='100' width='100'>";?>",
		msgPattern: "{seconds}",
		dateStart: new Date(),
		dateEnd:new Date('<?php echo date("M d, Y H:i:s",$rsb['endtime'])?>'),
		onStart: function() {
            console.log('start');
            },
		onEnd: function() { 
            console.log('end');
            },
	});

}
</script>
<?php
$sqlb= "select * from land where id=9";
$resultsb=mysqli_query($conn,$sqlb);
$rsb=mysqli_fetch_array($resultsb);
?>
<script>
function start9() {

	new Countdown({
		selector: '.timer9',
		msgBefore: "",
		msgAfter: "<?php echo "<a href='harvest.php?iid=".$rsb['item_onland']." &lid=".$rsb['id']."'><img src='img/shovel.gif' height='100' width='100'>";?>",
		msgPattern: "{seconds}",
		dateStart: new Date(),
		dateEnd:new Date('<?php echo date("M d, Y H:i:s",$rsb['endtime'])?>'),
		onStart: function() {
            console.log('start');
            },
		onEnd: function() { 
            console.log('end');
            },
	});

}
</script>
<?php
$sqlb= "select * from land where id=10";
$resultsb=mysqli_query($conn,$sqlb);
$rsb=mysqli_fetch_array($resultsb);
?>
<script>
function start10() {

	new Countdown({
		selector: '.timer10',
		msgBefore: "",
		msgAfter: "<?php echo "<a href='harvest.php?iid=".$rsb['item_onland']." &lid=".$rsb['id']."'><img src='img/shovel.gif' height='100' width='100'>";?>",
		msgPattern: "{seconds}",
		dateStart: new Date(),
		dateEnd:new Date('<?php echo date("M d, Y H:i:s",$rsb['endtime'])?>'),
		onStart: function() {
            console.log('start');
            },
		onEnd: function() { 
            console.log('end');
            },
	});

}
</script>
<?php
$sqlb= "select * from land where id=11";
$resultsb=mysqli_query($conn,$sqlb);
$rsb=mysqli_fetch_array($resultsb);
?>
<script>
function start11() {

	new Countdown({
		selector: '.timer11',
		msgBefore: "",
		msgAfter: "<?php echo "<a href='harvest.php?iid=".$rsb['item_onland']." &lid=".$rsb['id']."'><img src='img/shovel.gif' height='100' width='100'>";?>",
		msgPattern: "{seconds}",
		dateStart: new Date(),
		dateEnd:new Date('<?php echo date("M d, Y H:i:s",$rsb['endtime'])?>'),
		onStart: function() {
            console.log('start');
            },
		onEnd: function() { 
            console.log('end');
            },
	});

}
</script>
<?php
$sqlb= "select * from land where id=12";
$resultsb=mysqli_query($conn,$sqlb);
$rsb=mysqli_fetch_array($resultsb);
?>
<script>
function start12() {

	new Countdown({
		selector: '.timer12',
		msgBefore: "",
		msgAfter: "<?php echo "<a href='harvest.php?iid=".$rsb['item_onland']." &lid=".$rsb['id']."'><img src='img/shovel.gif' height='100' width='100'>";?>",
		msgPattern: "{seconds}",
		dateStart: new Date(),
		dateEnd:new Date('<?php echo date("M d, Y H:i:s",$rsb['endtime'])?>'),
		onStart: function() {
            console.log('start');
            },
		onEnd: function() { 
            console.log('end');
            },
	});

}
</script>
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  
  $(function() {
    $( "#progressbar" ).progressbar({
		
	<?php
	$userid=$_SESSION['uID'];
    $sql = "select * from user where id='".$userid."';";
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
$(function() {
    $( "#grow" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind", 
		
      },
      hide: {
        effect: "blind",       
      }
    }); 
    $( "#open_menu" ).click(function() {
      $( "#grow" ).dialog( "open" );
    });
  });  
$(function() {
    $( "#grow2" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind", 
		
      },
      hide: {
        effect: "blind",       
      }
    }); 
    $( "#open_menu2" ).click(function() {
      $( "#grow2" ).dialog( "open" );
    });
  });  
$(function() {
    $( "#grow3" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind", 
		
      },
      hide: {
        effect: "blind",       
      }
    }); 
    $( "#open_menu3" ).click(function() {
      $( "#grow3" ).dialog( "open" );
    });
  });  
$(function() {
    $( "#grow4" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind", 
		
      },
      hide: {
        effect: "blind",       
      }
    }); 
    $( "#open_menu4" ).click(function() {
      $( "#grow4" ).dialog( "open" );
    });
  });  
$(function() {
    $( "#grow5" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind", 
		
      },
      hide: {
        effect: "blind",       
      }
    }); 
    $( "#open_menu5" ).click(function() {
      $( "#grow5" ).dialog( "open" );
    });
  });  
$(function() {
    $( "#grow6" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind", 
		
      },
      hide: {
        effect: "blind",       
      }
    }); 
    $( "#open_menu6" ).click(function() {
      $( "#grow6" ).dialog( "open" );
    });
  });  
$(function() {
    $( "#grow7" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind", 
		
      },
      hide: {
        effect: "blind",       
      }
    }); 
    $( "#open_menu7" ).click(function() {
      $( "#grow7" ).dialog( "open" );
    });
  });  
$(function() {
    $( "#grow8" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind", 
		
      },
      hide: {
        effect: "blind",       
      }
    }); 
    $( "#open_menu8" ).click(function() {
      $( "#grow8" ).dialog( "open" );
    });
  });  
$(function() {
    $( "#grow9" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind", 
		
      },
      hide: {
        effect: "blind",       
      }
    }); 
    $( "#open_menu9" ).click(function() {
      $( "#grow9" ).dialog( "open" );
    });
  });  
$(function() {
    $( "#grow10" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind", 
		
      },
      hide: {
        effect: "blind",       
      }
    }); 
    $( "#open_menu10" ).click(function() {
      $( "#grow10" ).dialog( "open" );
    });
  });  
$(function() {
    $( "#grow11" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind", 
		
      },
      hide: {
        effect: "blind",       
      }
    }); 
    $( "#open_menu11" ).click(function() {
      $( "#grow11" ).dialog( "open" );
    });
  });  
$(function() {
    $( "#grow12" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind", 
		
      },
      hide: {
        effect: "blind",       
      }
    }); 
    $( "#open_menu12" ).click(function() {
      $( "#grow12" ).dialog( "open" );
    });
  });  
  
  

  
  
  
</script>


<body>

<h1><div style="z-index:10;" id="time1" class="timer1"></div></h1>
<h1><div style="z-index:10;" id="time2" class="timer2"></div></h1>
<h1><div style="z-index:10;" id="time3" class="timer3"></div></h1>
<h1><div style="z-index:10;" id="time4" class="timer4"></div></h1>
<h1><div style="z-index:10;" id="time5" class="timer5"></div></h1>
<h1><div style="z-index:10;" id="time6" class="timer6"></div></h1>
<h1><div style="z-index:10;" id="time7" class="timer7"></div></h1>
<h1><div style="z-index:10;" id="time8" class="timer8"></div></h1>
<h1><div style="z-index:10;" id="time9" class="timer9"></div></h1>
<h1><div style="z-index:10;" id="time10" class="timer10"></div></h1>
<h1><div style="z-index:10;" id="time11" class="timer11"></div></h1>
<h1><div style="z-index:10;" id="time12" class="timer12"></div></h1>
<?php
$userid=$_SESSION['uID'];
$sqlui="select * from user where id='".$userid."';";
$resultsui=mysqli_query($conn,$sqlui);
$rsui=mysqli_fetch_array($resultsui);
if($rsui['exp']>=100){
	$sql ="update user set level=level+'1' where id='".$userid."';";
	mysqli_query($conn,$sql) or die("MySQL query error"); 
	
	$sql ="update user set exp=exp-'100' where id='".$userid."';";
	mysqli_query($conn,$sql) or die("MySQL query error");
	//echo "<script> window.location='02.list.php';</script>";	
	echo "<img id=\"up\" src=\"img\star.png\" alt=\"up\" class=\"up\" height=\"500\" width=\"500\">";
	echo "<meta http-equiv=\"refresh\" content=\"1\">";
	
}                                 
?>               
<div id="lv">LV.</div>
<h1><?php
    $id=$_SESSION['uID'];
    echo"<div id=\"top\">";
    echo"$id";
    echo"</div>";
?></h1>
<div id="coincount">
<?php 
echo $rsui['cashinhand'];
?>
</div>
<div id="lovecount">
<?php
echo $rsui['lovecount'];
?>
</div>
<div id="level">
<?php
echo $rsui['level'];
?>
</div>
<?php
if($rsui['sex']=='m'){
	echo "<img id=\"people\" src=\"img\boy.png\" alt=\"people\" class=\"people\" height=\"100\" width=\"100\">";
}else{
	echo "<img id=\"people\" src=\"img\girl.png\" alt=\"people\" class=\"people\" height=\"100\" width=\"100\">";
}
?>
<img id="coin" src="img\coin.png" alt="coin" class="coin" height="50" width="50">
<img id="love" src="img\love.png" alt="love" class="love" height="50" width="50">
<a href="shop.php"><img id="shop" src="img\shop.png" alt="shop" class="shop" height="100" width="100"></a>
<a href="login.php"><img id="ctrl" src="img\exit.png" alt="logout" class="ctrl" height="100" width="100"></a>
<div id="package">
<img id="opener" src="img\package.png" alt="package" class="package" height="150" width="150">
</div>

<div id="progressbar" style="width:250px" ></div>

<div id="dialog" title="背包" > <!--背包的內容-->
<table width="800">
<tr>
	<td><img src="img\meat.png" alt="meat" height="100" width="100">
	</br>
	數量：
	<?php
	$sql = "select meat_qty from user where id='".$userid."';";
	$results=mysqli_query($conn,$sql);
	$rs=mysqli_fetch_array($results);
	echo $rs['meat_qty'];
	?></br>
	出售價：
	<?php
	$sql ="select item_outprice from package where id='5';";
	$results=mysqli_query($conn,$sql);
	$rs=mysqli_fetch_array($results);
	echo $rs['item_outprice'];
	?></br>
	<?php
	$sqlc = "select * from package where id='5';";
	$results=mysqli_query($conn,$sqlc);
	if ($rs=mysqli_fetch_array($results)) {
	echo"<a href='down_package.php?id=",$rs['id'],"'>使用</a>";
	}
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
	<td><img src="img\carrot.png" alt="carrot" height="100" width="100">
	</br>
	數量：
	<?php
	$sql = "select carrot_qty from user where id='".$userid."';";
	$results=mysqli_query($conn,$sql);
	$rs=mysqli_fetch_array($results);
	echo $rs['carrot_qty'];
	?> 
	</br>
	種植時間：
	<?php
	$sql ="select item_time from package where id='1';";
	$results=mysqli_query($conn,$sql);
	$rs=mysqli_fetch_array($results);
	echo $rs['item_time'];
	?></br>
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
	數量：
	<?php
	$sql = "select mushroom_qty from user where id='".$userid."';";
	$results=mysqli_query($conn,$sql);
	$rs=mysqli_fetch_array($results);
	echo $rs['mushroom_qty'];
	?>
	</br>
	種植時間：
	<?php
	$sql ="select item_time from package where id='2';";
	$results=mysqli_query($conn,$sql);
	$rs=mysqli_fetch_array($results);
	echo $rs['item_time'];
	?></br>
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
	數量：
	<?php
	$sql = "select eggplant_qty from user where id='".$userid."';";
	$results=mysqli_query($conn,$sql);
	$rs=mysqli_fetch_array($results);
	echo $rs['eggplant_qty'];
	?>
	</br>
	種植時間：
	<?php
	$sql ="select item_time from package where id='3';";
	$results=mysqli_query($conn,$sql);
	$rs=mysqli_fetch_array($results);
	echo $rs['item_time'];
	?></br>
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
	數量：
	<?php
	$sql = "select corn_qty from user where id='".$userid."';";
	$results=mysqli_query($conn,$sql);
	$rs=mysqli_fetch_array($results);
	echo $rs['corn_qty'];
	?>
	</br>
	種植時間：
	<?php
	$sql ="select item_time from package where id='4';";
	$results=mysqli_query($conn,$sql);
	$rs=mysqli_fetch_array($results);
	echo $rs['item_time'];
	?></br>
	出售價：
	<?php
	$sql ="select item_outprice from package where id='4';";
	$results=mysqli_query($conn,$sql);
	$rs=mysqli_fetch_array($results);
	echo $rs['item_outprice'];
	?>
	</td>
</tr>
</table>  
</div>

<div id="content"> <!--土地的顯示-->
<table>
<tr>
	<!-- 0=未開耕，1=可種植， 2=種植中-->
	<td><?php
		$sql ="select * from land where id='1';"; //land 1
		$results=mysqli_query($conn,$sql);
		$rs=mysqli_fetch_array($results);
		if($rs['status']=='0'){ //未開耕
			$sqlc= "select * from package where id='6';";
			$results=mysqli_query($conn,$sqlc);
			$rsc=mysqli_fetch_array($results);
			echo "<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'><img src=\"img\\grass.png\" height=\"100\" width=\"100\">"; 
		}
		else if($rs['status']=='1'){ //可種植
		?>
			<img id="open_menu" src="img\farm.png" height="100" width="100">
		
			<div  id="grow" title="可種植" > <!--可種植的內容-->
			<table width="300">
			<tr>
				<td><img src="img\carrot.png" alt="carrot" height="100" width="100"> 
				
				</br>
				<?php
				$sqlc = "select * from package where id='1';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
				
				<td><img src="img\mushroom.png" alt="mushroom" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='2';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
				
				<td><img src="img\eggplant.png" alt="eggplant" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='3';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>

				<td><img src="img\corn.png" alt="corn" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='4';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
			</tr>
			</table>  
			</div>
			
		<?php
		}
		else if($rs['status']=='2'){ //種植中
			if($rs['item_onland']=='1'){
				echo "<img src=\"img\\carrot_grow.gif\" height=\"100\" width=\"100\">";
				echo "<script>start1()</script>";        
			}
			
			else if($rs['item_onland']=='2'){
				echo "<img src=\"img\\mushroom_grow.png\" height=\"100\" width=\"100\">";
				echo "<script>start1()</script>";
			}
			else if($rs['item_onland']=='3'){
				echo "<img src=\"img\\eggplant_grow.png\" height=\"100\" width=\"100\">";
				echo "<script>start1()</script>";
			}
			else if($rs['item_onland']=='4'){
				echo "<img src=\"img\\corn_grow.gif\" height=\"100\" width=\"100\">";
				echo "<script>start1()</script>";
			}
			else{
				echo "<img src=\"img\\grass.png\" height=\"100\" width=\"100\">"; 
			}
		}

	?></td>
	<td><?php
		$sql ="select * from land where id='2';"; //land 2
		$results=mysqli_query($conn,$sql);
		$rs=mysqli_fetch_array($results);
		if($rs['status']=='0'){ //未開耕
			$sqlc= "select * from package where id='6';";
			$results=mysqli_query($conn,$sqlc);
			$rsc=mysqli_fetch_array($results);
			echo "<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'><img src=\"img\\grass.png\" height=\"100\" width=\"100\">"; 
		}
		else if($rs['status']=='1'){ //可種植
		?>
			<img id="open_menu2" src="img\farm.png" height="100" width="100">
		
			<div id="grow2" title="可種植" > <!--可種植的內容-->
			<table width="300">
			<tr>
				<td><img src="img\carrot.png" alt="carrot" height="100" width="100"> 
				</br>
				<?php
				$sqlc = "select * from package where id='1';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
				
				<td><img src="img\mushroom.png" alt="mushroom" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='2';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
				
				<td><img src="img\eggplant.png" alt="eggplant" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='3';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>

				<td><img src="img\corn.png" alt="corn" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='4';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
			</tr>
			</table>  
			</div>
			
		<?php
		}
		else if($rs['status']=='2'){ //種植中
			if($rs['item_onland']=='1'){
				echo "<img src=\"img\\carrot_grow.gif\" height=\"100\" width=\"100\">";
				echo "<script>start2()</script>";
			}
			else if($rs['item_onland']=='2'){
				echo "<img src=\"img\\mushroom_grow.png\" height=\"100\" width=\"100\">";
				echo "<script>start2()</script>";
			}
			else if($rs['item_onland']=='3'){
				echo "<img src=\"img\\eggplant_grow.png\" height=\"100\" width=\"100\">";
				echo "<script>start2()</script>";
			}
			else if($rs['item_onland']=='4'){
				echo "<img src=\"img\\corn_grow.gif\" height=\"100\" width=\"100\">";
				echo "<script>start2()</script>";
			}
			else{
				echo "<img src=\"img\\grass.png\" height=\"100\" width=\"100\">"; 
			}
		}
	?></td>
	<td><?php
		$sql ="select * from land where id='3';"; //land 3
		$results=mysqli_query($conn,$sql);
		$rs=mysqli_fetch_array($results);
		if($rs['status']=='0'){ //未開耕
			$sqlc= "select * from package where id='6';";
			$results=mysqli_query($conn,$sqlc);
			$rsc=mysqli_fetch_array($results);
			echo "<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'><img src=\"img\\grass.png\" height=\"100\" width=\"100\">"; 
		}
		else if($rs['status']=='1'){ //可種植
		?>
			<img id="open_menu3" src="img\farm.png" height="100" width="100">
		
			<div id="grow3" title="可種植" > <!--可種植的內容-->
			<table width="300">
			<tr>
				<td><img src="img\carrot.png" alt="carrot" height="100" width="100"> 
				</br>
				<?php
				$sqlc = "select * from package where id='1';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
				
				<td><img src="img\mushroom.png" alt="mushroom" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='2';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
				
				<td><img src="img\eggplant.png" alt="eggplant" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='3';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>

				<td><img src="img\corn.png" alt="corn" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='4';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
			</tr>
			</table>  
			</div>
			
		<?php
		}
		else if($rs['status']=='2'){ //種植中
			if($rs['item_onland']=='1'){
				echo "<img src=\"img\\carrot_grow.gif\" height=\"100\" width=\"100\">";
				echo "<script>start3()</script>";
			}
			else if($rs['item_onland']=='2'){
				echo "<img src=\"img\\mushroom_grow.png\" height=\"100\" width=\"100\">";
				echo "<script>start3()</script>";
			}
			else if($rs['item_onland']=='3'){
				echo "<img src=\"img\\eggplant_grow.png\" height=\"100\" width=\"100\">";
				echo "<script>start3()</script>";
			}
			else if($rs['item_onland']=='4'){
				echo "<img src=\"img\\corn_grow.gif\" height=\"100\" width=\"100\">";
				echo "<script>start3()</script>";
			}
			else{
				echo "<img src=\"img\\grass.png\" height=\"100\" width=\"100\">"; 
			}
		}
	?></td>
	<td><?php
		$sql ="select * from land where id='4';"; //land 4
		$results=mysqli_query($conn,$sql);
		$rs=mysqli_fetch_array($results);
		if($rs['status']=='0'){ //未開耕
			$sqlc= "select * from package where id='6';";
			$results=mysqli_query($conn,$sqlc);
			$rsc=mysqli_fetch_array($results);
			echo "<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'><img src=\"img\\grass.png\" height=\"100\" width=\"100\">"; 
		}
		else if($rs['status']=='1'){ //可種植
		?>
			<img id="open_menu4" src="img\farm.png" height="100" width="100">
		
			<div id="grow4" title="可種植" > <!--可種植的內容-->
			<table width="300">
			<tr>
				<td><img src="img\carrot.png" alt="carrot" height="100" width="100"> 
				</br>
				<?php
				$sqlc = "select * from package where id='1';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
				
				<td><img src="img\mushroom.png" alt="mushroom" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='2';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
				
				<td><img src="img\eggplant.png" alt="eggplant" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='3';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>

				<td><img src="img\corn.png" alt="corn" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='4';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
			</tr>
			</table>  
			</div>
			
		<?php
		}
		else if($rs['status']=='2'){ //種植中
			if($rs['item_onland']=='1'){
				echo "<img src=\"img\\carrot_grow.gif\" height=\"100\" width=\"100\">";
				echo "<script>start4()</script>";
			}
			else if($rs['item_onland']=='2'){
				echo "<img src=\"img\\mushroom_grow.png\" height=\"100\" width=\"100\">";
				echo "<script>start4()</script>";
			}
			else if($rs['item_onland']=='3'){
				echo "<img src=\"img\\eggplant_grow.png\" height=\"100\" width=\"100\">";
				echo "<script>start4()</script>";
			}
			else if($rs['item_onland']=='4'){
				echo "<img src=\"img\\corn_grow.gif\" height=\"100\" width=\"100\">";
				echo "<script>start4()</script>";
			}
			else{
				echo "<img src=\"img\\grass.png\" height=\"100\" width=\"100\">"; 
			}
		}
	?></td>
</tr>
<tr>
	<td><?php
		$sql ="select * from land where id='5';"; //land 5
		$results=mysqli_query($conn,$sql);
		$rs=mysqli_fetch_array($results);
		if($rs['status']=='0'){ //未開耕
			$sqlc= "select * from package where id='6';";
			$results=mysqli_query($conn,$sqlc);
			$rsc=mysqli_fetch_array($results);
			echo "<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'><img src=\"img\\grass.png\" height=\"100\" width=\"100\">"; 
		}
		else if($rs['status']=='1'){ //可種植
		?>
			<img id="open_menu5" src="img\farm.png" height="100" width="100">
		
			<div id="grow5" title="可種植" > <!--可種植的內容-->
			<table width="300">
			<tr>
				<td><img src="img\carrot.png" alt="carrot" height="100" width="100"> 
				</br>
				<?php
				$sqlc = "select * from package where id='1';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
				
				<td><img src="img\mushroom.png" alt="mushroom" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='2';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
				
				<td><img src="img\eggplant.png" alt="eggplant" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='3';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>

				<td><img src="img\corn.png" alt="corn" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='4';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
			</tr>
			</table>  
			</div>
			
		<?php
		}
		else if($rs['status']=='2'){ //種植中
			if($rs['item_onland']=='1'){
				echo "<img src=\"img\\carrot_grow.gif\" height=\"100\" width=\"100\">";
				echo "<script>start5()</script>";
			}
			else if($rs['item_onland']=='2'){
				echo "<img src=\"img\\mushroom_grow.png\" height=\"100\" width=\"100\">";
				echo "<script>start5()</script>";
			}
			else if($rs['item_onland']=='3'){
				echo "<img src=\"img\\eggplant_grow.png\" height=\"100\" width=\"100\">";
				echo "<script>start5()</script>";
			}
			else if($rs['item_onland']=='4'){
				echo "<img src=\"img\\corn_grow.gif\" height=\"100\" width=\"100\">";
				echo "<script>start5()</script>";
			}
			else{
				echo "<img src=\"img\\grass.png\" height=\"100\" width=\"100\">";
                echo "<script>start5()</script>";				
			}
		}
	?></td>
	<td><?php
		$sql ="select * from land where id='6';"; //land 6
		$results=mysqli_query($conn,$sql);
		$rs=mysqli_fetch_array($results);
		if($rs['status']=='0'){ //未開耕
			$sqlc= "select * from package where id='6';";
			$results=mysqli_query($conn,$sqlc);
			$rsc=mysqli_fetch_array($results);
			echo "<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'><img src=\"img\\grass.png\" height=\"100\" width=\"100\">"; 
		}
		else if($rs['status']=='1'){ //可種植
		?>
			<img id="open_menu6" src="img\farm.png" height="100" width="100">
		
			<div id="grow6" title="可種植" > <!--可種植的內容-->
			<table width="300">
			<tr>
				<td><img src="img\carrot.png" alt="carrot" height="100" width="100"> 
				</br>
				<?php
				$sqlc = "select * from package where id='1';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
				
				<td><img src="img\mushroom.png" alt="mushroom" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='2';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
				
				<td><img src="img\eggplant.png" alt="eggplant" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='3';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>

				<td><img src="img\corn.png" alt="corn" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='4';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
			</tr>
			</table>  
			</div>
			
		<?php
		}
		else if($rs['status']=='2'){ //種植中
			if($rs['item_onland']=='1'){
				echo "<img src=\"img\\carrot_grow.gif\" height=\"100\" width=\"100\">";
				echo "<script>start6()</script>";
			}
			else if($rs['item_onland']=='2'){
				echo "<img src=\"img\\mushroom_grow.png\" height=\"100\" width=\"100\">";
				echo "<script>start6()</script>";
			}
			else if($rs['item_onland']=='3'){
				echo "<img src=\"img\\eggplant_grow.png\" height=\"100\" width=\"100\">";
				echo "<script>start6()</script>";
			}
			else if($rs['item_onland']=='4'){
				echo "<img src=\"img\\corn_grow.gif\" height=\"100\" width=\"100\">";
				echo "<script>start6()</script>";
			}
			else{
				echo "<img src=\"img\\grass.png\" height=\"100\" width=\"100\">"; 
				echo "<script>start6()</script>";
			}
		}
	?></td>
	<td><?php
		$sql ="select * from land where id='7';"; //land 7
		$results=mysqli_query($conn,$sql);
		$rs=mysqli_fetch_array($results);
		if($rs['status']=='0'){ //未開耕
			$sqlc= "select * from package where id='6';";
			$results=mysqli_query($conn,$sqlc);
			$rsc=mysqli_fetch_array($results);
			echo "<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'><img src=\"img\\grass.png\" height=\"100\" width=\"100\">"; 
		}
		else if($rs['status']=='1'){ //可種植
		?>
			<img id="open_menu7" src="img\farm.png" height="100" width="100">
		
			<div id="grow7" title="可種植" > <!--可種植的內容-->
			<table width="300">
			<tr>
				<td><img src="img\carrot.png" alt="carrot" height="100" width="100"> 
				</br>
				<?php
				$sqlc = "select * from package where id='1';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
				
				<td><img src="img\mushroom.png" alt="mushroom" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='2';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
				
				<td><img src="img\eggplant.png" alt="eggplant" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='3';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>

				<td><img src="img\corn.png" alt="corn" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='4';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
			</tr>
			</table>  
			</div>
			
		<?php
		}
		else if($rs['status']=='2'){ //種植中
			if($rs['item_onland']=='1'){
				echo "<img src=\"img\\carrot_grow.gif\" height=\"100\" width=\"100\">";
				echo "<script>start7()</script>";
			}
			else if($rs['item_onland']=='2'){
				echo "<img src=\"img\\mushroom_grow.png\" height=\"100\" width=\"100\">";
				echo "<script>start7()</script>";
			}
			else if($rs['item_onland']=='3'){
				echo "<img src=\"img\\eggplant_grow.png\" height=\"100\" width=\"100\">";
				echo "<script>start7()</script>";
			}
			else if($rs['item_onland']=='4'){
				echo "<img src=\"img\\corn_grow.gif\" height=\"100\" width=\"100\">";
				echo "<script>start7()</script>";
			}
			else{
				echo "<img src=\"img\\grass.png\" height=\"100\" width=\"100\">"; 
			}
		}
	?></td>
	<td><?php
		$sql ="select * from land where id='8';"; //land 8
		$results=mysqli_query($conn,$sql);
		$rs=mysqli_fetch_array($results);
		if($rs['status']=='0'){ //未開耕
			$sqlc= "select * from package where id='6';"; 
			$results=mysqli_query($conn,$sqlc);
			$rsc=mysqli_fetch_array($results);
			echo "<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'><img src=\"img\\grass.png\" height=\"100\" width=\"100\">"; 
		}
		else if($rs['status']=='1'){ //可種植
		?>
			<img id="open_menu8" src="img\farm.png" height="100" width="100">
		
			<div id="grow8" title="可種植" > <!--可種植的內容-->
			<table width="300">
			<tr>
				<td><img src="img\carrot.png" alt="carrot" height="100" width="100"> 
				</br>
				<?php
				$sqlc = "select * from package where id='1';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
				
				<td><img src="img\mushroom.png" alt="mushroom" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='2';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
				
				<td><img src="img\eggplant.png" alt="eggplant" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='3';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>

				<td><img src="img\corn.png" alt="corn" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='4';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
			</tr>
			</table>  
			</div>
			
		<?php
		}
		else if($rs['status']=='2'){ //種植中
			if($rs['item_onland']=='1'){
				echo "<img src=\"img\\carrot_grow.gif\" height=\"100\" width=\"100\">";
				echo "<script>start8()</script>";
			}
			else if($rs['item_onland']=='2'){
				echo "<img src=\"img\\mushroom_grow.png\" height=\"100\" width=\"100\">";
				echo "<script>start8()</script>";
			}
			else if($rs['item_onland']=='3'){
				echo "<img src=\"img\\eggplant_grow.png\" height=\"100\" width=\"100\">";
				echo "<script>start8()</script>";
			}
			else if($rs['item_onland']=='4'){
				echo "<img src=\"img\\corn_grow.gif\" height=\"100\" width=\"100\">";
				echo "<script>start8()</script>";
			}
			else{
				echo "<img src=\"img\\grass.png\" height=\"100\" width=\"100\">"; 
			}
		}
	?></td>
</tr>
<tr>
	<td><?php
		$sql ="select * from land where id='9';"; //land 9
		$results=mysqli_query($conn,$sql);
		$rs=mysqli_fetch_array($results);
		if($rs['status']=='0'){ //未開耕
			$sqlc= "select * from package where id='6';";
			$results=mysqli_query($conn,$sqlc);
			$rsc=mysqli_fetch_array($results);
			echo "<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'><img src=\"img\\grass.png\" height=\"100\" width=\"100\">"; 
		}
		else if($rs['status']=='1'){ //可種植
		?>
			<img id="open_menu9" src="img\farm.png" height="100" width="100">
		
			<div id="grow9" title="可種植" > <!--可種植的內容-->
			<table width="300">
			<tr>
				<td><img src="img\carrot.png" alt="carrot" height="100" width="100"> 
				</br>
				<?php
				$sqlc = "select * from package where id='1';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
				
				<td><img src="img\mushroom.png" alt="mushroom" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='2';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
				
				<td><img src="img\eggplant.png" alt="eggplant" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='3';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>

				<td><img src="img\corn.png" alt="corn" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='4';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
			</tr>
			</table>  
			</div>
			
		<?php
		}
		else if($rs['status']=='2'){ //種植中
			if($rs['item_onland']=='1'){
				echo "<img src=\"img\\carrot_grow.gif\" height=\"100\" width=\"100\">";
				echo "<script>start9()</script>";
			}
			else if($rs['item_onland']=='2'){
				echo "<img src=\"img\\mushroom_grow.png\" height=\"100\" width=\"100\">";
				echo "<script>start9()</script>";
			}
			else if($rs['item_onland']=='3'){
				echo "<img src=\"img\\eggplant_grow.png\" height=\"100\" width=\"100\">";
				echo "<script>start9()</script>";
			}
			else if($rs['item_onland']=='4'){
				echo "<img src=\"img\\corn_grow.gif\" height=\"100\" width=\"100\">";
				echo "<script>start9()</script>";
			}
			else{
				echo "<img src=\"img\\grass.png\" height=\"100\" width=\"100\">"; 
			}
		}
		?></td>
	<td><?php
		$sql ="select * from land where id='10';"; //land 10
		$results=mysqli_query($conn,$sql);
		$rs=mysqli_fetch_array($results);
		if($rs['status']=='0'){ //未開耕
			$sqlc= "select * from package where id='6';";
			$results=mysqli_query($conn,$sqlc);
			$rsc=mysqli_fetch_array($results);
			echo "<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'><img src=\"img\\grass.png\" height=\"100\" width=\"100\">"; 
		}
		else if($rs['status']=='1'){ //可種植
		?>
			<img id="open_menu10" src="img\farm.png" height="100" width="100">
		
			<div id="grow10" title="可種植" > <!--可種植的內容-->
			<table width="300">
			<tr>
				<td><img src="img\carrot.png" alt="carrot" height="100" width="100"> 
				</br>
				<?php
				$sqlc = "select * from package where id='1';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
				
				<td><img src="img\mushroom.png" alt="mushroom" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='2';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
				
				<td><img src="img\eggplant.png" alt="eggplant" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='3';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>

				<td><img src="img\corn.png" alt="corn" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='4';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
			</tr>
			</table>  
			</div>
			
		<?php
		}
		else if($rs['status']=='2'){ //種植中
			if($rs['item_onland']=='1'){
				echo "<img src=\"img\\carrot_grow.gif\" height=\"100\" width=\"100\">";
				echo "<script>start10()</script>";
			}
			else if($rs['item_onland']=='2'){
				echo "<img src=\"img\\mushroom_grow.png\" height=\"100\" width=\"100\">";
				echo "<script>start10()</script>";
			}
			else if($rs['item_onland']=='3'){
				echo "<img src=\"img\\eggplant_grow.png\" height=\"100\" width=\"100\">";
				echo "<script>start10()</script>";
			}
			else if($rs['item_onland']=='4'){
				echo "<img src=\"img\\corn_grow.gif\" height=\"100\" width=\"100\">";
				echo "<script>start10()</script>";
			}
			else{
				echo "<img src=\"img\\grass.png\" height=\"100\" width=\"100\">"; 
			}
		}
		?></td>
	<td><?php
		$sql ="select * from land where id='11';"; //land 11
		$results=mysqli_query($conn,$sql);
		$rs=mysqli_fetch_array($results);
		if($rs['status']=='0'){ //未開耕
			$sqlc= "select * from package where id='6';";
			$results=mysqli_query($conn,$sqlc);
			$rsc=mysqli_fetch_array($results);
			echo "<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'><img src=\"img\\grass.png\" height=\"100\" width=\"100\">"; 
		}
		else if($rs['status']=='1'){ //可種植
		?>
			<img id="open_menu11" src="img\farm.png" height="100" width="100">
		
			<div id="grow11" title="可種植" > <!--可種植的內容-->
			<table width="300">
			<tr>
				<td><img src="img\carrot.png" alt="carrot" height="100" width="100"> 
				</br>
				<?php
				$sqlc = "select * from package where id='1';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
				
				<td><img src="img\mushroom.png" alt="mushroom" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='2';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
				
				<td><img src="img\eggplant.png" alt="eggplant" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='3';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>

				<td><img src="img\corn.png" alt="corn" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='4';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
			</tr>
			</table>  
			</div>
			
		<?php
		}
		else if($rs['status']=='2'){ //種植中
			if($rs['item_onland']=='1'){
				echo "<img src=\"img\\carrot_grow.gif\" height=\"100\" width=\"100\">";
				echo "<script>start11()</script>";
			}
			else if($rs['item_onland']=='2'){
				echo "<img src=\"img\\mushroom_grow.png\" height=\"100\" width=\"100\">";
				echo "<script>start11()</script>";
			}
			else if($rs['item_onland']=='3'){
				echo "<img src=\"img\\eggplant_grow.png\" height=\"100\" width=\"100\">";
				echo "<script>start11()</script>";
			}
			else if($rs['item_onland']=='4'){
				echo "<img src=\"img\\corn_grow.gif\" height=\"100\" width=\"100\">";
				echo "<script>start11()</script>";
			}
			else{
				echo "<img src=\"img\\grass.png\" height=\"100\" width=\"100\">"; 
			}
		}
		?></td>
	<td><?php
		$sql ="select * from land where id='12';"; //land 12
		$results=mysqli_query($conn,$sql);
		$rs=mysqli_fetch_array($results);
		if($rs['status']=='0'){ //未開耕
			$sqlc= "select * from package where id='6';";
			$results=mysqli_query($conn,$sqlc);
			$rsc=mysqli_fetch_array($results);
			echo "<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'><img src=\"img\\grass.png\" height=\"100\" width=\"100\">"; 
		}
		else if($rs['status']=='1'){ //可種植
		?>
			<img id="open_menu12" src="img\farm.png" height="100" width="100">
		
			<div id="grow12" title="可種植" > <!--可種植的內容-->
			<table width="300">
			<tr>
				<td><img src="img\carrot.png" alt="carrot" height="100" width="100"> 
				</br>
				<?php
				$sqlc = "select * from package where id='1';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
				
				<td><img src="img\mushroom.png" alt="mushroom" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='2';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
				
				<td><img src="img\eggplant.png" alt="eggplant" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='3';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>

				<td><img src="img\corn.png" alt="corn" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='4';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
			</tr>
			</table>  
			</div>
			
		<?php
		}
		else if($rs['status']=='2'){ //種植中
			if($rs['item_onland']=='1'){
				echo "<img src=\"img\\carrot_grow.gif\" height=\"100\" width=\"100\">";
				echo "<script>start12()</script>";
			}
			else if($rs['item_onland']=='2'){
				echo "<img src=\"img\\mushroom_grow.png\" height=\"100\" width=\"100\">";
				echo "<script>start12()</script>";
			}
			else if($rs['item_onland']=='3'){
				echo "<img src=\"img\\eggplant_grow.png\" height=\"100\" width=\"100\">";
				echo "<script>start12()</script>";
			}
			else if($rs['item_onland']=='4'){
				echo "<img src=\"img\\corn_grow.gif\" height=\"100\" width=\"100\">";
				echo "<script>start12()</script>";
			}
			else{
				echo "<img src=\"img\\grass.png\" height=\"100\" width=\"100\">"; 
			}
		}
		?></td>
</tr>

</table>
</div>

</body>
</html>
