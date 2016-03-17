<?php
  include_once("setting/database_setting.php");
  
  	
	function create_order($customer,$cart)
	{
		$con = connect_db();
		$sql_is = "
		insert into theorder(
		cfname
		,clname
		,addressnumber
		,street
		,district
		,subdistrict
		,province
		,postcode
		,cphone
		,cemail
		,totalprice
		,orderdate
		)
					
		values(
		 '$customer[cfname]'
		,'$customer[clname]'
		,'$customer[addressnumber]'
		,'$customer[street]'
		,'$customer[district]'
		,'$customer[subdistrict]'
		,'$customer[province]'
		,'$customer[postcode]'
		,'$customer[cphone]'
		,'$customer[cemail]'
		,$cart[total_price]
		,NOW())
		";
					
		if(!mysql_query($sql_is,$con))
		{
			die("เพิ่มข้อมูลไม่สำเร็จเพราะ :".mysql_error());
		}
		
		$order_id = mysql_insert_id();
		
		mysql_close($con);
		
		return $order_id;
		
	}
	
	function read_all_order()
	{
		$con = connect_db();
			
			$result = mysql_query("select * from theorder");
			
			$orders = array();
			
			while($row = mysql_fetch_array($result))
			{
				$product_order_results = mysql_query("select * from productorder where orderid=$row[id]");
				$product_orders = array();
				while($product_orders_row = mysql_fetch_array($product_order_results))
				{
					array_push($product_orders, $product_orders_row);
				}
				
				$row["product_orders"] = $product_orders;
				
				array_push($orders, $row);
			}
			return $orders;
			
	}

?>