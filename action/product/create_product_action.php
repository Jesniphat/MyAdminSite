<?php
	$name = $_REQUEST["name"];
	$description = $_REQUEST["description"];
	$price = $_REQUEST["price"];
	$category_id = $_REQUEST["category_id"];
	
	//ย้ายรูปไปเก็บใน Folder ที่เราต้องการ
	$filename = $_FILES["product_image"]["tmp_name"];
	$name_file = $_FILES["product_image"]["name"];
	$upload_file = "uploaded_file/".$name_file;
	move_uploaded_file($filename,$upload_file);
	
	include_once("function/product_data_access.php");
	create_product($name,$description,$price,$category_id,$upload_file);
	
	
	$_REQUEST["action"]="product/retrieve_product_action";
	include("action_controller.php");
	
	
	
?>