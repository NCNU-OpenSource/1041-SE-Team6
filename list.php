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


 body {
  width: 450px;
 margin:200px auto;
 font-size:14pt;
 }

</style>
<body  style="background-color:#63FF63" >


<div id="content">
<table>
  <tr>
    <td><img src="p2.png" alt="田" height="100" width="100"/>  </td> 	
    <td><img src="p2.png" alt="田" height="100" width="100"/>  </td>
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
   
<?php
$uerid=$_SESSION['uID'];
$sql2="select  * from user where id =$uerid;";
$results2=mysqli_query($conn,$sql2);//跟sql2指令連結

?>
</body>
</table>
</div>

<p><a href="login.php">登出</a> </p>


</html>
