<?php
	$forum_id = $_REQUEST["forum_id"];
	$writername = $_REQUEST["writername"];
	$comment = $_REQUEST["comment"];
	
	include_once("function/comment_data_access.php");
	createComment($writername,$comment,$forum_id);
	
	include("view_forum_action.php");
?>