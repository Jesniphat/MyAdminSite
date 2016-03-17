<?php
	$product_id = $_REQUEST["product_id"];
	
	
	
	include_once("function/product_data_access.php");
	delete_product($product_id);
	
	
	$_REQUEST["action"]="product/retrieve_product_action";
	include("action_controller.php");
	
	
?>