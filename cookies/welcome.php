<?php
	$username = $_POST["username"];
	setcookie("username",$username,time()+(15*60))
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Untitled Document</title>
	</head>
	<body>
		<p>ข้อมูล username ได้ถูกเก็บใน cookies แล้ว</p>
	</body>
</html>