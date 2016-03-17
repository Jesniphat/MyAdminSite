<?php
	$forum_id = $_REQUEST["forum_id"];
	
	include_once("function/forum_data_access.php");
	include_once("function/comment_data_access.php");
	
	$forum = read_forums_by_id($forum_id);
	
	$comments = read_comment_by_forum_id($forum_id);
	
	include("forum_detail_page.php");
	
?>