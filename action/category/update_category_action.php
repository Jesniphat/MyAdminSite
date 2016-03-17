<?php
	$cat_id = $_REQUEST["category_id"];
	$cat_name = $_REQUEST["name"];
	$cat_description = $_REQUEST["description"];
	
	include_once("function/category_data_access.php");
	update_category($cat_id,$cat_name,$cat_description);
	
	$_REQUEST["action"]="category/retrieve_category_action";
	include("action_controller.php");
	
?>