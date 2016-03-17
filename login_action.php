<?php

	session_start();

	$username = $_REQUEST["username"];
	$password = $_REQUEST["password"];
	
	include_once("function/user_data_access.php");
	$user = reed_user_by_user_name($username);
	
	if($user==FALSE)
	{
		$error_massage = "username ผิดกรุณากรอกใหม่";
		include("login_page.php");
	}
	else
	{
		if($password != $user["password"])
		{
			$error_massage = "password ผิดกรุณากรอกใหม่";
			include("login_page.php");
		}
		else
		{
			$_SESSION["login"]= $user;
			include("index.php");
		}
	}
?>