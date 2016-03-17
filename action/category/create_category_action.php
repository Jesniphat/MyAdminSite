<?php
	
	$name = $_POST["cname"];
	$description = $_POST["cdescription"];


	include_once("function/category_data_access.php");
	$category_id = create_category($name,$description);

	$_REQUEST["action"]="category/retrieve_category_action";
	include("action_controller.php");

?>