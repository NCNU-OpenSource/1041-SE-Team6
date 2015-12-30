<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>註冊</title>
</head>
<style type="text/css">
h1 {padding:5px;  text-align: center}
body {width: 550px;
 margin:100px auto;
 font-size:14pt;
 background-image:url(img/rg.jpg);
 background-attachment:fixed;
 background-repeat: no-repeat;
 }
input {font-size:20pt}
 </style>
<body >
<p><h1>新手註冊 </h1></p>



<form method="post" action="insert.php">
<h1>帳號 : <input type="text" name="id"><br /></h1>
<h1>密碼 : <input type="text" name="password"><br /></h1>
<h1>性別 : <input type="radio" name="sex" value="m"/> 男
		<input type="radio" name="sex" value="f"/> 女 </h1>
<h1><input type="submit" value="註冊">
<a href="login.php">回登入畫面</a></p>
</h1>


</body>
</html>
