<?php
	include_once("setting/database_setting.php");
	
	
	
	function read_all_webboard()
	{
		$con = connect_db();
			
			$result = mysql_query("select * from Webboards");
			
			$webboard = array();
			while($row = mysql_fetch_array($result))
			{
				array_push($webboard,$row);
			}
			
			return $webboard;
	}
	
	function read_webboard_by_id($webboard_id)
	{
		$con = connect_db();
			
			$result = mysql_query("select * from Webboards where id=$webboard_id");
			
			$webboard = mysql_fetch_array($result);
			
			return $webboard;
	}
?>