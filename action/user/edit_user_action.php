<?php
	
	include_once("function/user_data_access.php");
	
	$user_id = $_REQUEST["user_id"];
	
	$us = get_user_by_id($user_id);
	
	
	$_REQUEST["page"] = "user/edit_user_form_page";
	include("page_controller.php");
	
?>