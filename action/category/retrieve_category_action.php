<?php
	include_once("function/category_data_access.php");
	$c = read_all_category();
	
	
	$_REQUEST["page"]="category/category_list_page";
	include("page_controller.php");
?>