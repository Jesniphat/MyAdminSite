<?php
	$user_id = $_REQUEST["user_id"];
	
	include_once("function/user_data_access.php");
	delete_user($user_id);
	
	
	$_REQUEST["action"]="user/retrieve_user_action";
	include("action_controller.php");
	
?>