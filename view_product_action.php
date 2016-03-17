<?php
	$product_id = $_REQUEST["product_id"];
	
	
	include_once("function/product_data_access.php");
	include_once("function/product_comment_data_access.php");
	$product = get_product_by_id($product_id);
	$productcomment = read_product_comment_by_productid($product_id);
	
	include("product_detail_page.php");
?>