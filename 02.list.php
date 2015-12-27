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
  width: 480px ;
 margin:175px auto; 
 }
#top{
    position:absolute;
    top: 110px;
    left:60px;
    font-size: 20pt
    text-align:center;
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




<body  style="background-color:#63FF63" >
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
	echo "<script> window.location='02.list.php';</script>";
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
<a href="shop.php"><img id="shop" src="shop.png" alt="shop" class="shop" height="100" width="100"></a>
<a href="login.php"><img id="ctrl" src="ctrl.png" alt="logout" class="ctrl" height="100" width="100"></a>
<img id="people" src="people.png" alt="people" class="people" height="100" width="100">
<img id="coin" src="coin.png" alt="coin" class="coin" height="50" width="50">
<img id="love" src="love.png" alt="love" class="love" height="50" width="50">

<div id="package">
<img id="opener" src="package.png" alt="package" class="package" height="150" width="150">
</div>

<div id="progressbar" style="width:180px" ></div>

<div id="dialog" title="背包" > <!--背包的內容-->
<table width="800">
<tr>
	<td><img src="meat.png" alt="meat" height="100" width="100">
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
	
	<td><img src="land.png" alt="land" height="100" width="100">
	</br>
	數量：
	<?php
	$sql = "select land_qty from user where id='".$userid."';";
	$results=mysqli_query($conn,$sql);
	$rs=mysqli_fetch_array($results);
	echo $rs['land_qty'];
	?>	
	</td>
	
	<td><img src="carrot.png" alt="carrot" height="100" width="100"> 
	</br>
	種植時間：
	<?php
	$sql ="select item_time from package where id='1';";
	$results=mysqli_query($conn,$sql);
	$rs=mysqli_fetch_array($results);
	echo $rs['item_time'];
	?></br>
	數量：
	<?php
	$sql = "select carrot_qty from user where id='".$userid."';";
	$results=mysqli_query($conn,$sql);
	$rs=mysqli_fetch_array($results);
	echo $rs['carrot_qty'];
	?></br>
	出售價：
	<?php
	$sql ="select item_outprice from package where id='1';";
	$results=mysqli_query($conn,$sql);
	$rs=mysqli_fetch_array($results);
	echo $rs['item_outprice'];
	?>
	</td>
	
	<td><img src="mushroom.png" alt="mushroom" height="100" width="100">
	</br>
	種植時間：
	<?php
	$sql ="select item_time from package where id='2';";
	$results=mysqli_query($conn,$sql);
	$rs=mysqli_fetch_array($results);
	echo $rs['item_time'];
	?></br>
	數量：
	<?php
	$sql = "select mushroom_qty from user where id='".$userid."';";
	$results=mysqli_query($conn,$sql);
	$rs=mysqli_fetch_array($results);
	echo $rs['mushroom_qty'];
	?></br>
	出售價：
	<?php
	$sql ="select item_outprice from package where id='2';";
	$results=mysqli_query($conn,$sql);
	$rs=mysqli_fetch_array($results);
	echo $rs['item_outprice'];
	?>
	</td>
	
	<td><img src="eggplant.png" alt="eggplant" height="100" width="100">
	</br>
	種植時間：
	<?php
	$sql ="select item_time from package where id='3';";
	$results=mysqli_query($conn,$sql);
	$rs=mysqli_fetch_array($results);
	echo $rs['item_time'];
	?></br>
	數量：
	<?php
	$sql = "select eggplant_qty from user where id='".$userid."';";
	$results=mysqli_query($conn,$sql);
	$rs=mysqli_fetch_array($results);
	echo $rs['eggplant_qty'];
	?></br>
	出售價：
	<?php
	$sql ="select item_outprice from package where id='3';";
	$results=mysqli_query($conn,$sql);
	$rs=mysqli_fetch_array($results);
	echo $rs['item_outprice'];
	?>
	</td>

	<td><img src="corn.png" alt="corn" height="100" width="100">
	</br>
	種植時間：
	<?php
	$sql ="select item_time from package where id='4';";
	$results=mysqli_query($conn,$sql);
	$rs=mysqli_fetch_array($results);
	echo $rs['item_time'];
	?></br>
	數量：
	<?php
	$sql = "select corn_qty from user where id='".$userid."';";
	$results=mysqli_query($conn,$sql);
	$rs=mysqli_fetch_array($results);
	echo $rs['corn_qty'];
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
			echo "<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'><img src=\"p3.png\" height=\"100\" width=\"100\">"; 
		}
		else if($rs['status']=='1'){ //可種植
		?>
			<img id="open_menu" src="p2.png" height="100" width="100">
		
			<div id="grow" title="可種植" > <!--可種植的內容-->
			<table width="300">
			<tr>
				<td><img src="carrot.png" alt="carrot" height="100" width="100"> 
				</br>
				<?php
				$sqlc = "select * from package where id='1';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
				
				<td><img src="mushroom.png" alt="mushroom" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='2';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
				
				<td><img src="eggplant.png" alt="eggplant" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='3';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>

				<td><img src="corn.png" alt="corn" height="100" width="100">
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
				echo "<img src=\"carrot_grow.png\" height=\"100\" width=\"100\">";
			}
			else if($rs['item_onland']=='2'){
				echo "<img src=\"mushroom_grow.png\" height=\"100\" width=\"100\">";
			}
			else if($rs['item_onland']=='3'){
				echo "<img src=\"eggplant_grow.png\" height=\"100\" width=\"100\">";
			}
			else if($rs['item_onland']=='4'){
				echo "<img src=\"corn_grow.png\" height=\"100\" width=\"100\">";
			}
		
			else{
				echo "<img src=\"p2.png\" height=\"100\" width=\"100\">"; 
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
			echo "<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'><img src=\"p3.png\" height=\"100\" width=\"100\">"; 
		}
		else if($rs['status']=='1'){ //可種植
		?>
			<img id="open_menu2" src="p2.png" height="100" width="100">
		
			<div id="grow2" title="可種植" > <!--可種植的內容-->
			<table width="300">
			<tr>
				<td><img src="carrot.png" alt="carrot" height="100" width="100"> 
				</br>
				<?php
				$sqlc = "select * from package where id='1';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
				
				<td><img src="mushroom.png" alt="mushroom" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='2';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
				
				<td><img src="eggplant.png" alt="eggplant" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='3';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>

				<td><img src="corn.png" alt="corn" height="100" width="100">
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
				echo "<img src=\"carrot_grow.png\" height=\"100\" width=\"100\">";
			}
			else if($rs['item_onland']=='2'){
				echo "<img src=\"mushroom_grow.png\" height=\"100\" width=\"100\">";
			}
			else if($rs['item_onland']=='3'){
				echo "<img src=\"eggplant_grow.png\" height=\"100\" width=\"100\">";
			}
			else if($rs['item_onland']=='4'){
				echo "<img src=\"corn_grow.png\" height=\"100\" width=\"100\">";
			}
			else{
				echo "<img src=\"p2.png\" height=\"100\" width=\"100\">"; 
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
			echo "<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'><img src=\"p3.png\" height=\"100\" width=\"100\">"; 
		}
		else if($rs['status']=='1'){ //可種植
		?>
			<img id="open_menu3" src="p2.png" height="100" width="100">
		
			<div id="grow3" title="可種植" > <!--可種植的內容-->
			<table width="300">
			<tr>
				<td><img src="carrot.png" alt="carrot" height="100" width="100"> 
				</br>
				<?php
				$sqlc = "select * from package where id='1';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
				
				<td><img src="mushroom.png" alt="mushroom" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='2';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
				
				<td><img src="eggplant.png" alt="eggplant" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='3';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>

				<td><img src="corn.png" alt="corn" height="100" width="100">
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
				echo "<img src=\"carrot_grow.png\" height=\"100\" width=\"100\">";
			}
			else if($rs['item_onland']=='2'){
				echo "<img src=\"mushroom_grow.png\" height=\"100\" width=\"100\">";
			}
			else if($rs['item_onland']=='3'){
				echo "<img src=\"eggplant_grow.png\" height=\"100\" width=\"100\">";
			}
			else if($rs['item_onland']=='4'){
				echo "<img src=\"corn_grow.png\" height=\"100\" width=\"100\">";
			}
			else{
				echo "<img src=\"p2.png\" height=\"100\" width=\"100\">"; 
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
			echo "<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'><img src=\"p3.png\" height=\"100\" width=\"100\">"; 
		}
		else if($rs['status']=='1'){ //可種植
		?>
			<img id="open_menu4" src="p2.png" height="100" width="100">
		
			<div id="grow4" title="可種植" > <!--可種植的內容-->
			<table width="300">
			<tr>
				<td><img src="carrot.png" alt="carrot" height="100" width="100"> 
				</br>
				<?php
				$sqlc = "select * from package where id='1';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
				
				<td><img src="mushroom.png" alt="mushroom" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='2';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
				
				<td><img src="eggplant.png" alt="eggplant" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='3';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>

				<td><img src="corn.png" alt="corn" height="100" width="100">
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
				echo "<img src=\"carrot_grow.png\" height=\"100\" width=\"100\">";
			}
			else if($rs['item_onland']=='2'){
				echo "<img src=\"mushroom_grow.png\" height=\"100\" width=\"100\">";
			}
			else if($rs['item_onland']=='3'){
				echo "<img src=\"eggplant_grow.png\" height=\"100\" width=\"100\">";
			}
			else if($rs['item_onland']=='4'){
				echo "<img src=\"corn_grow.png\" height=\"100\" width=\"100\">";
			}
			else{
				echo "<img src=\"p2.png\" height=\"100\" width=\"100\">"; 
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
			echo "<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'><img src=\"p3.png\" height=\"100\" width=\"100\">"; 
		}
		else if($rs['status']=='1'){ //可種植
		?>
			<img id="open_menu5" src="p2.png" height="100" width="100">
		
			<div id="grow5" title="可種植" > <!--可種植的內容-->
			<table width="300">
			<tr>
				<td><img src="carrot.png" alt="carrot" height="100" width="100"> 
				</br>
				<?php
				$sqlc = "select * from package where id='1';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
				
				<td><img src="mushroom.png" alt="mushroom" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='2';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
				
				<td><img src="eggplant.png" alt="eggplant" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='3';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>

				<td><img src="corn.png" alt="corn" height="100" width="100">
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
				echo "<img src=\"carrot_grow.png\" height=\"100\" width=\"100\">";
			}
			else if($rs['item_onland']=='2'){
				echo "<img src=\"mushroom_grow.png\" height=\"100\" width=\"100\">";
			}
			else if($rs['item_onland']=='3'){
				echo "<img src=\"eggplant_grow.png\" height=\"100\" width=\"100\">";
			}
			else if($rs['item_onland']=='4'){
				echo "<img src=\"corn_grow.png\" height=\"100\" width=\"100\">";
			}
			else{
				echo "<img src=\"p2.png\" height=\"100\" width=\"100\">"; 
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
			echo "<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'><img src=\"p3.png\" height=\"100\" width=\"100\">"; 
		}
		else if($rs['status']=='1'){ //可種植
		?>
			<img id="open_menu6" src="p2.png" height="100" width="100">
		
			<div id="grow6" title="可種植" > <!--可種植的內容-->
			<table width="300">
			<tr>
				<td><img src="carrot.png" alt="carrot" height="100" width="100"> 
				</br>
				<?php
				$sqlc = "select * from package where id='1';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
				
				<td><img src="mushroom.png" alt="mushroom" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='2';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
				
				<td><img src="eggplant.png" alt="eggplant" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='3';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>

				<td><img src="corn.png" alt="corn" height="100" width="100">
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
				echo "<img src=\"carrot_grow.png\" height=\"100\" width=\"100\">";
			}
			else if($rs['item_onland']=='2'){
				echo "<img src=\"mushroom_grow.png\" height=\"100\" width=\"100\">";
			}
			else if($rs['item_onland']=='3'){
				echo "<img src=\"eggplant_grow.png\" height=\"100\" width=\"100\">";
			}
			else if($rs['item_onland']=='4'){
				echo "<img src=\"corn_grow.png\" height=\"100\" width=\"100\">";
			}
			else{
				echo "<img src=\"p2.png\" height=\"100\" width=\"100\">"; 
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
			echo "<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'><img src=\"p3.png\" height=\"100\" width=\"100\">"; 
		}
		else if($rs['status']=='1'){ //可種植
		?>
			<img id="open_menu7" src="p2.png" height="100" width="100">
		
			<div id="grow7" title="可種植" > <!--可種植的內容-->
			<table width="300">
			<tr>
				<td><img src="carrot.png" alt="carrot" height="100" width="100"> 
				</br>
				<?php
				$sqlc = "select * from package where id='1';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
				
				<td><img src="mushroom.png" alt="mushroom" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='2';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
				
				<td><img src="eggplant.png" alt="eggplant" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='3';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>

				<td><img src="corn.png" alt="corn" height="100" width="100">
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
				echo "<img src=\"carrot_grow.png\" height=\"100\" width=\"100\">";
			}
			else if($rs['item_onland']=='2'){
				echo "<img src=\"mushroom_grow.png\" height=\"100\" width=\"100\">";
			}
			else if($rs['item_onland']=='3'){
				echo "<img src=\"eggplant_grow.png\" height=\"100\" width=\"100\">";
			}
			else if($rs['item_onland']=='4'){
				echo "<img src=\"corn_grow.png\" height=\"100\" width=\"100\">";
			}
			else{
				echo "<img src=\"p2.png\" height=\"100\" width=\"100\">"; 
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
			echo "<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'><img src=\"p3.png\" height=\"100\" width=\"100\">"; 
		}
		else if($rs['status']=='1'){ //可種植
		?>
			<img id="open_menu8" src="p2.png" height="100" width="100">
		
			<div id="grow8" title="可種植" > <!--可種植的內容-->
			<table width="300">
			<tr>
				<td><img src="carrot.png" alt="carrot" height="100" width="100"> 
				</br>
				<?php
				$sqlc = "select * from package where id='1';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
				
				<td><img src="mushroom.png" alt="mushroom" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='2';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
				
				<td><img src="eggplant.png" alt="eggplant" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='3';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>

				<td><img src="corn.png" alt="corn" height="100" width="100">
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
				echo "<img src=\"carrot_grow.png\" height=\"100\" width=\"100\">";
			}
			else if($rs['item_onland']=='2'){
				echo "<img src=\"mushroom_grow.png\" height=\"100\" width=\"100\">";
			}
			else if($rs['item_onland']=='3'){
				echo "<img src=\"eggplant_grow.png\" height=\"100\" width=\"100\">";
			}
			else if($rs['item_onland']=='4'){
				echo "<img src=\"corn_grow.png\" height=\"100\" width=\"100\">";
			}
			else{
				echo "<img src=\"p2.png\" height=\"100\" width=\"100\">"; 
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
			echo "<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'><img src=\"p3.png\" height=\"100\" width=\"100\">"; 
		}
		else if($rs['status']=='1'){ //可種植
		?>
			<img id="open_menu9" src="p2.png" height="100" width="100">
		
			<div id="grow9" title="可種植" > <!--可種植的內容-->
			<table width="300">
			<tr>
				<td><img src="carrot.png" alt="carrot" height="100" width="100"> 
				</br>
				<?php
				$sqlc = "select * from package where id='1';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
				
				<td><img src="mushroom.png" alt="mushroom" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='2';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
				
				<td><img src="eggplant.png" alt="eggplant" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='3';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>

				<td><img src="corn.png" alt="corn" height="100" width="100">
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
				echo "<img src=\"carrot_grow.png\" height=\"100\" width=\"100\">";
			}
			else if($rs['item_onland']=='2'){
				echo "<img src=\"mushroom_grow.png\" height=\"100\" width=\"100\">";
			}
			else if($rs['item_onland']=='3'){
				echo "<img src=\"eggplant_grow.png\" height=\"100\" width=\"100\">";
			}
			else if($rs['item_onland']=='4'){
				echo "<img src=\"corn_grow.png\" height=\"100\" width=\"100\">";
			}
			else{
				echo "<img src=\"p2.png\" height=\"100\" width=\"100\">"; 
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
			echo "<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'><img src=\"p3.png\" height=\"100\" width=\"100\">"; 
		}
		else if($rs['status']=='1'){ //可種植
		?>
			<img id="open_menu10" src="p2.png" height="100" width="100">
		
			<div id="grow10" title="可種植" > <!--可種植的內容-->
			<table width="300">
			<tr>
				<td><img src="carrot.png" alt="carrot" height="100" width="100"> 
				</br>
				<?php
				$sqlc = "select * from package where id='1';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
				
				<td><img src="mushroom.png" alt="mushroom" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='2';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
				
				<td><img src="eggplant.png" alt="eggplant" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='3';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>

				<td><img src="corn.png" alt="corn" height="100" width="100">
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
				echo "<img src=\"carrot_grow.png\" height=\"100\" width=\"100\">";
			}
			else if($rs['item_onland']=='2'){
				echo "<img src=\"mushroom_grow.png\" height=\"100\" width=\"100\">";
			}
			else if($rs['item_onland']=='3'){
				echo "<img src=\"eggplant_grow.png\" height=\"100\" width=\"100\">";
			}
			else if($rs['item_onland']=='4'){
				echo "<img src=\"corn_grow.png\" height=\"100\" width=\"100\">";
			}
			else{
				echo "<img src=\"p2.png\" height=\"100\" width=\"100\">"; 
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
			echo "<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'><img src=\"p3.png\" height=\"100\" width=\"100\">"; 
		}
		else if($rs['status']=='1'){ //可種植
		?>
			<img id="open_menu11" src="p2.png" height="100" width="100">
		
			<div id="grow11" title="可種植" > <!--可種植的內容-->
			<table width="300">
			<tr>
				<td><img src="carrot.png" alt="carrot" height="100" width="100"> 
				</br>
				<?php
				$sqlc = "select * from package where id='1';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
				
				<td><img src="mushroom.png" alt="mushroom" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='2';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
				
				<td><img src="eggplant.png" alt="eggplant" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='3';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>

				<td><img src="corn.png" alt="corn" height="100" width="100">
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
				echo "<img src=\"carrot_grow.png\" height=\"100\" width=\"100\">";
			}
			else if($rs['item_onland']=='2'){
				echo "<img src=\"mushroom_grow.png\" height=\"100\" width=\"100\">";
			}
			else if($rs['item_onland']=='3'){
				echo "<img src=\"eggplant_grow.png\" height=\"100\" width=\"100\">";
			}
			else if($rs['item_onland']=='4'){
				echo "<img src=\"corn_grow.png\" height=\"100\" width=\"100\">";
			}
			else{
				echo "<img src=\"p2.png\" height=\"100\" width=\"100\">"; 
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
			echo "<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'><img src=\"p3.png\" height=\"100\" width=\"100\">"; 
		}
		else if($rs['status']=='1'){ //可種植
		?>
			<img id="open_menu12" src="p2.png" height="100" width="100">
		
			<div id="grow12" title="可種植" > <!--可種植的內容-->
			<table width="300">
			<tr>
				<td><img src="carrot.png" alt="carrot" height="100" width="100"> 
				</br>
				<?php
				$sqlc = "select * from package where id='1';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
				
				<td><img src="mushroom.png" alt="mushroom" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='2';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>
				
				<td><img src="eggplant.png" alt="eggplant" height="100" width="100">
				</br>
				<?php
				$sqlc = "select * from package where id='3';";
				$results=mysqli_query($conn,$sqlc);
				if ($rsc=mysqli_fetch_array($results)) {
				echo"<a href='down_package.php?id=",$rsc['id']," &lid=",$rs['id'],"'>使用</a>";
				}
				?>	
				</td>

				<td><img src="corn.png" alt="corn" height="100" width="100">
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
				echo "<img src=\"carrot_grow.png\" height=\"100\" width=\"100\">";
			}
			else if($rs['item_onland']=='2'){
				echo "<img src=\"mushroom_grow.png\" height=\"100\" width=\"100\">";
			}
			else if($rs['item_onland']=='3'){
				echo "<img src=\"eggplant_grow.png\" height=\"100\" width=\"100\">";
			}
			else if($rs['item_onland']=='4'){
				echo "<img src=\"corn_grow.png\" height=\"100\" width=\"100\">";
			}
			else{
				echo "<img src=\"p2.png\" height=\"100\" width=\"100\">"; 
			}
		}
		?></td>
</tr>

</table>
</div>

</body>
</html>
