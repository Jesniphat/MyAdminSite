<?php
	
	include_once("function/category_data_access.php");
	
	$category_id = $_REQUEST["category_id"];
	
	$ctg = get_category_by_id($category_id);
	
	
	$_REQUEST["page"]="category/edit_category_form_page";
	include("page_controller.php");
	
	
	
?>