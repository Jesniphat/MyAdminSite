<?php
	
	$the_id = $_REQUEST["catid"];
	
	include_once("function/product_data_access.php");
	include_once("function/category_data_access.php");
	include_once("function/date_data_access.php");
	$products = read_all_products($the_id);
	$category = read_all_category();
	
	$_REQUEST["page"]="product/product_list_page";
	include("page_controller.php");
	
	
	
?>