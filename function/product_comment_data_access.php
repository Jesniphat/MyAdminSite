<?php
	include_once("setting/database_setting.php");
	
	function read_product_comment_by_productid($product_id)
	{
		$con = connect_db();
		$c = "select * from productcomment where productid='$product_id'";
		$result = mysql_query($c);
		
		$productcomment = array();
		while($row = mysql_fetch_array($result))
		{
			array_push($productcomment, $row);
		}
		
		mysql_close($con);
		
		return $productcomment;
		
	}
	
	function create_product_comment($writername,$comment,$product_id)
	{
		$con = connect_db();
			
			$sql = "
			insert into productcomment(writername,comment, productid)
			values('$writername','$comment','$product_id')
			";
			
			if (!mysql_query($sql,$con))
			{
				die("เกิดปัญหา: ".mysql_error());
			}
			
			$product_comment = mysql_insert_id();
			return $product_comment;
	}
	
?>