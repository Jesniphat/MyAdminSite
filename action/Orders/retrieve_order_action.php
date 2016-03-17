<?php
	
	include_once("function/order_data_access.php");
	include_once("function/product_data_access.php");
	$orders = read_all_order();
	
	$_REQUEST["page"] = "Order/order_list_page";
	include("page_controller.php");
	
?>