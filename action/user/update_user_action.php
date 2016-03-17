<?php

	$user_id = $_REQUEST["user_id"];
	$fname = $_REQUEST["fname"];
	$lname = $_REQUEST["lname"];
	$email = $_REQUEST["email"];
	$phone = $_REQUEST["phone"];
	$age = $_REQUEST["age"];
	
	include_once("function/user_data_access.php");
	update_user($user_id,$fname,$lname,$email,$phone,$age);
	
	
	$_REQUEST["action"]="user/retrieve_user_action";
	include("action_controller.php");
?>