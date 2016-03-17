<?php
	include_once("setting/database_setting.php");
	
	
	
	function read_all_category()
	{
		$con = connect_db();
			
			$result = mysql_query("select * from category");
			
			$category = array();
			while($row = mysql_fetch_array($result))
			{
				array_push($category,$row);
			}
			
			return $category;
	}
	
	function create_category($name,$description)
	{
		$con = connect_db();
			
			$sql = "
					insert into category(name,description)
					values('$name','$description')
					";
			if(!mysql_query($sql,$con))
			{
				die("สั่งงานฐานข้อมูลผิดพลาด :".mysql_error());
			}
			
			$category_id = mysql_insert_id();
			
			return $category_id;
	}
	
	function get_category_by_id($category_id)
	{
		$con = connect_db();
		$result = mysql_query("select * from category where id='$category_id'");
		$category = mysql_fetch_array($result);
			
		return $category;
	}
	
	function update_category($cat_id,$cat_name,$cat_description)
	{
		$con = connect_db();
		
		$sql_ud = "update category
				set name = '$cat_name',
					description = '$cat_description'	
				where id = $cat_id
				";
		if(!mysql_Query($sql_ud,$con))
		{
			die("สั่งงานฐานข้อมมูลผิดพลาดเพราะ :".mysql_error());
		}
			
	}
	
	function delete_categyry($cat_id)
	{
		$con = connect_db();
		
		$sql_dl = "delete from category where id=$cat_id";
		if(!mysql_query($sql_dl,$con))
		{
			die("สั่งงานฐานข้อมูลไม่ได้เพราะ :".mysql_error());
		}
		mysql_close();
	}
?>