<?php
include_once("setting/database_setting.php");
  
  	
	function create_product_order($order_id,$cart)
	{
		$con = connect_db();
		$product_list = $cart["product_list"];
		
		$product_id_list = array_keys($product_list);
		
		foreach($product_id_list as $product_id)
		{
			$product_item = $product_list[$product_id];
			
			$sql_is = "insert into productorder(orderid,productid,item)
						values($order_id,$product_id,$product_item)
						";
			if(!mysql_query($sql_is,$con))
			{
				die("เพิ่มข้อมูลไม่สำเร็จเพราะ :".mysql_error());
			}
		}
		
		mysql_close($con);
		
	}


?>