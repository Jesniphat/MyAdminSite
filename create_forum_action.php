<?php
	$webboard_id = $_REQUEST["webboard_id"];
	$subject = $_REQUEST["subject"];
	$writer_name = $_REQUEST["wrietername"];
	$details = $_REQUEST["details"];
	
	
	include_once("function/forum_data_access.php");
	$forum = creat_forum($subject,$writer_name,$details,$webboard_id);
	
	include("list_forums_by_webboard_id_action.php")
?>