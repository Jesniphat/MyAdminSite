<?php
	$webboard_id = $_REQUEST["webboard_id"];


	include_once("function/forum_data_access.php");
	//include_once("function/webboard_data_access.php");
	
	$forum = read_forum_by_webboard_id($webboard_id);
	//$webboard = read_webboard_by_id($webboard_id);
	
	include("forum_list_page.php");
	
?>