<?php 
require("config.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>carrot putto bag</title>
</head>
<body>
<?php
$id=(int)$_GET['id'];
if($id<=0){
	echo "empty ID";
	exit(0);
}
$sql = "update package set qty=qty+1 where id=$id;";
mysqli_query($conn,$sql) or die("MySQL query error"); //執行SQL
header("Location: shop.php");
?>

</body>
</html>