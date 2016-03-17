<?php
	session_start();
	
	include_once("function/product_data_access.php");
	
	$cart = $_SESSION["cart"];
	$product_list = $cart["product_list"];
	$product_id = $_REQUEST["product_id"];
	
	$product = get_product_by_id($product_id);
	
	$product_total = $product_list[$product_id];
	
	//ลดจำนวนสินค้าใน cart
	$cart["total"] = $cart["total"]-$product_total;
	
	//ลดราคาสินค้าออกจากผลรวมสินค้าทั้งหมด
	$cart["total_price"] = $cart["total_price"] - ($product_total*$product["price"]);
	
	//เอาสินค้าออกจากตะกร้า หรือ ออกจาก poduct_list
	unset($product_list[$product_id]);
	$cart["product_list"] = $product_list;
	
	$_SESSION["cart"] = $cart;
	
	include("cart_page.php");
	
?>