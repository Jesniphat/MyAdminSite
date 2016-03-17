<?php
	$fname = trim($_REQUEST["fname"]);
	$lname = trim($_REQUEST["lname"]);
	$email = trim($_REQUEST["email"]);
	$phone = trim($_REQUEST["phone"]);
	$age = trim($_REQUEST["age"]);
	$username = trim($_REQUEST["username"]);
	$password = trim($_REQUEST["password"]);
	
	$error_massager = "";
	
	if($fname == '')
	{
		$error_massager .= "คุณไม่ได้กรอกชื่อ!<br />";
	}
	if($lname == '')
	{
		$error_massager .= "คุณไม่ได้กรอกนามสกุล!<br />";
	}
	if($email == '')
	{
		$error_massager .= "คุณไม่ได้กรอกอีเมลล์!<br />";
	}
	
	/**
	$filter = array(
					"age"=>array("filter"=>FILTER_VALIDATE_INT),
					"email"=>array("filter"=>FILTER_VALIDATE_EMAIL)
					);
	$result = filter_input_array(INPUT_POST,$filter);
	
	if(!$result["age"])
	{
		$error_massager .= "คุณกรอกอายุไม่ถูกต้อง!<br />";
	}
	if(!$result["email"])
	{
		$error_massager .= "คุณกรอกอีเมลล์ไม่ถูกต้อง!<br />";
	}**/
	
	if(!filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL))
	{
		$error_massager .= "คุณกรอกอีเมลล์ไม่ถูกต้อง!<br />";
	}
	
	if($age != "")
	{
		if(!filter_input(INPUT_POST,"age",FILTER_VALIDATE_INT))
		{
			$error_massager .= "คุณกรอกอายุไม่ถูกต้อง!<br />";
		}
		else
		{
			if($age<3 || $age>150)
			{
				$error_massager .= "คุณกรอกอายุไม่ถูกต้อง!<br />";
			}
		}
	}
	
	include_once("function/user_data_access.php");
	$total_user = count_user_by_email($email);
	
	if($total_user>0)
	{
		$error_massager .= "อีเมลล์หรือชื่อนี้ถูกใช้ไปแล้ว!<br />";
	}
	
	$tusern = count_user_by_username($username);
	if($tusern>0)
	{
		$error_massager .= "username นี้ถูกใช้ไปแล้ว!<br />";
	}

	if($error_massager == "")
	{	
		creat_user($fname,$lname,$email,$phone,$age,$username,$password);
		
		$_REQUEST["action"]="user/retrieve_user_action";
		include("action_controller.php");
	}
	
	
	
	else
	{
		$_REQUEST["page"]="user/new_user_form_page";
		include("page_controller.php");
	}
?>