<?php
	include_once("function/user_data_access.php");
	include_once("function/date_data_access.php");
	$u = read_all_user();
	
	$_REQUEST["page"]="user/user_list_page";
	include("page_controller.php")
?>