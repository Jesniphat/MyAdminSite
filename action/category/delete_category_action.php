<?php
	$cat_id = $_REQUEST["category_id"];
	
	include_once("function/category_data_access.php");
	$cat_dl = delete_categyry($cat_id);
	
	
	$_REQUEST["action"] = "category/retrieve_category_action";
	include("action_controller.php");
?>