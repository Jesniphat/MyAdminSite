<?php
	$cat_id = $_REQUEST["cat_id"];
	
	include_once("function/product_data_access.php");
	include_once("function/category_data_access.php");
	$product = read_products_by_catid($cat_id);
	$category = get_category_by_id($cat_id);
	
	include("product_list_by_catid_page.php");
	
?>