<?php
	
	$product_id = $_REQUEST["product_id"];
	
	
	include_once("function/product_data_access.php");
	$product = get_product_by_id($product_id);
	
	include_once("function/category_data_access.php");
	$category = read_all_category();
	
	
	$_REQUEST["page"] = "product/edit_product_form_page";
	include("page_controller.php");
	
	
	
?>