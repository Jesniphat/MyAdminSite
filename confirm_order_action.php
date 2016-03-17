<?php
	session_start();
	
	include_once("function/order_data_access.php");
	include_once("function/product_order_data_access.php");
	include_once("function/product_data_access.php");
	
	$order_id = create_order($_SESSION["customer"],$_SESSION["cart"]);
	create_product_order($order_id,$_SESSION["cart"]);
	update_instock($_SESSION["cart"]);
	
	unset($_SESSION["cart"]);
	unset($_SESSION["customer"]);
	
	include("order_complete_page.php");
?>