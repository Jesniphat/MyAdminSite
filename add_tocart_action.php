<?php
	session_start();
	
	include_once("function/product_data_access.php");

	$product_id = $_REQUEST["product_id"];
	
	if(!isset($_SESSION["cart"]))
	{
		$cart = array();
		$cart["product_list"] = array();
		$cart["total"] = 0;
		$cart["total_price"] = 0;
		$_SESSION["cart"] = $cart;
	}
	
	$cart = $_SESSION["cart"];
	
	$product = get_product_by_id($product_id);
	
	
	$product_list = $cart["product_list"];
	if(array_key_exists($product_id,$product_list))
	{
		$product_list[$product_id] = ($product_list["$product_id"])+1;
	}else
	{
		$product_list[$product_id]=1;
	}
	
	$cart["product_list"] = $product_list;
	$cart["total"] = $cart["total"]+1;
	$cart["total_price"] = $cart["total_price"]+$product["price"];
	
	$_SESSION["cart"] = $cart;
	
	include("cart_page.php");
	
	
		
?>