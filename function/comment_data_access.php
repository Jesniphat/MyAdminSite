<?php
include_once("setting/database_setting.php");

	function read_comment_by_forum_id($forum_id)
		{
			$con = connect_db();
			$result = mysql_query("select * from comments where forumid=$forum_id");
			
			$comments = array();
			while($row = mysql_fetch_array($result))
			{
				array_push($comments, $row);
			}
				
			return $comments;
		}
	
	function createComment($writername,$comment,$forum_id)
	{
		$con = connect_db();
		
		$writerIP = $_SERVER["REMOTE_ADDR"];
		$sql = "
		insert into comments(
		writername,comment,forumid,createdon,writerip
		)
		values('$writername','$comment',$forum_id,NOW(),'$writerIP')
		";
		
		if(!mysql_query($sql,$con))
		{
			die("เกิดปัญหาไม่สามารถสั่งงานฐานข้อมูลได้เพราะ ".mysql_error());
		}
		
		$comment_id = mysql_insert_id();
		
		mysql_close($con);
		
		return $comment_id;
	}
?>