<?php
	include_once("setting/database_setting.php");
	
	function read_all_products($the_id)
	{
		$con = connect_db();
		$x = "select p.id,p.name,p.price,p.description,p.createdOn,p.image,c.name cname
								from product p inner join category c
								on p.categoryid=c.id where c.id='$the_id'";
		//$y = "SELECT * FROM product WHERE categoryid='8'";
		$result = mysql_query($x);
								
		$products = array();
		
		while($row = mysql_fetch_array($result))
		{
			array_push($products,$row);
		}
		
		mysql_close();
		return $products;
	}
	
	
	
	function read_10_products()
	{
		$con = connect_db();
		$x = "select p.id,p.name,p.price,p.description,p.createdOn,p.image,c.name cname
								from product p left join category c
								on p.categoryid=c.id order by p.id desc limit 0,6";
		$result = mysql_query($x);
								
		$products = array();
		
		while($row = mysql_fetch_array($result))
		{
			array_push($products,$row);
		}
		
		mysql_close();
		return $products;
	}
	
	
	
	
	function read_products_by_catid($cat_id)
	{
		$con = connect_db();
		$x = "select p.id,p.name,p.price,p.description,p.createdOn,p.image,c.name cname
								from product p left join category c
								on p.categoryid=c.id 
								where p.categoryid = '$cat_id' 
								order by p.id desc";
		$result = mysql_query($x);
								
		$products = array();
		
		while($row = mysql_fetch_array($result))
		{
			array_push($products,$row);
		}
		
		mysql_close();
		return $products;
	}
	
	
	
	
	
	
	
	function create_product($name,$description,$price,$category_id,$image)
	{
		$con = connect_db();
		$sql_is = "insert into product(name,description,price,categoryid,image,createdOn)
					values('$name','$description',$price,$category_id,'$image',NOW())
					";
					
		if(!mysql_query($sql_is,$con))
		{
			die("เพิ่มข้อมูลไม่สำเร็จเพราะ :".mysql_error());
		}
		
		$product_id = mysql_insert_id();
		
		mysql_close($con);
		
		return $product_id;
		
	}
	
	
	function get_product_by_id($product_id)
	{
		$con = connect_db();
		$result = mysql_query("select * from product where id='$product_id'");
		
		$product = mysql_fetch_array($result);
		
		mysql_close($con);
			
		return $product;
	}
	
	
	function update_produc($product_id,$name,$description,$price,$category_id,$upload_file)
	{
		$con = connect_db();
		
		$sql_ud = "update product
				set name = '$name',
					description = '$description',
					price = $price,
					categoryid = $category_id,
					image = '$upload_file'	
				where id = $product_id
				";
		if(!mysql_Query($sql_ud,$con))
		{
			die("สั่งงานฐานข้อมมูลผิดพลาดเพราะ :".mysql_error());
		}
			
	}
	
	function delete_product($product_id)
	{
		$con = connect_db();
		
		$sql_dl = "delete from product where id=$product_id";
		
		if(!mysql_query($sql_dl,$con))
		{
			die("สั่งงานฐานข้อมูลไม่ได้เพราะ :".mysql_error());
		}
		mysql_close();
	}
	
	
	function update_instock($cart)
	{
		$con = connect_db();
		$product_list = $cart["product_list"];
		
		$product_id_list = array_keys($product_list);
		
		foreach($product_id_list as $product_id)
		{
			$product_Qty = $product_list[$product_id];
			
			$xx = mysql_query("select instock from product where id = '$product_id'") ;
            $p = mysql_fetch_array($xx);
            //mysql_close($con);
            $BB = $p[instock] - $product_Qty;
             //echo "$BB";
			
			$sql_is = "update product set instock = '$BB' where id = '$product_id'";
			if(!mysql_query($sql_is,$con))
			{
				die("เพิ่มข้อมูลไม่สำเร็จเพราะ :".mysql_error());
			}
		}
		
		mysql_close($con);
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	

?>