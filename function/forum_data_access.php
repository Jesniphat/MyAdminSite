<?php
	include_once("setting/database_setting.php");
	
	function read_forum_by_webboard_id($webboard_id)
	{
		$con = connect_db();
			
			$result = mysql_query("select * from forums where webboardid=$webboard_id");
			
			$forums = array();
			while($row = mysql_fetch_array($result))
			{
				array_push($forums,$row);
			}
			
			return $forums;
	}
	
	function creat_forum($subject,$writer_name,$details,$webboard_id)
	{
		$con = connect_db();
			
			$sql = "
			insert into forums(subject,writername,details,webboardid,createdon)
			values('$subject','$writer_name','$details',$webboard_id,NOW())
			";
			
			if (!mysql_query($sql,$con))
			{
				die("เกิดปัญหา: ".mysql_error());
			}
			
			$forum_id = mysql_insert_id();
			return $forum_id;
			
	}
	
	
	function read_forums_by_id($forum_id)
	{
		$con = connect_db();
		$result = mysql_query("select * from forums where id='$forum_id'");
		
		$forum = mysql_fetch_array($result);
		
		mysql_close($con);
			
		return $forum;
	}
?>