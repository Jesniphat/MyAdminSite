
<div id="shoppingcart">
	<h1>หน้าตะกร้าสินค้า</h1>
	<p>สินค้าในตะกร้า: <?php echo $_SESSION["cart"]["total"]; ?></p>
	<p>ราคารวมทั้งหมด: <?php echo $_SESSION["cart"]["total_price"]; ?></p>
	<p><?php print_r($_SESSION["cart"]); ?></p>
	<?php 
		$cart = $_SESSION["cart"];
		$product_list = $cart["product_list"];
		$product_id_list = array_keys($product_list);
		
		echo "<table border='1'>";
		echo "<tr><th>ลบ</th><th>ชื่อสินค้า</th><th>คำอธิบาย</th><th>ราคา</th><th>จำนวลที่สั่ง</th></tr>";
		foreach($product_id_list as $pro_id_list)
		{
			$product = get_product_by_id($pro_id_list);
			echo "<tr>";
			echo "<td><a href='remove_product_from_cart.php?product_id=$product[id]'>ลบสินค้า</a></td>";
			echo "<td>$product[name]</td>";
			echo "<td>$product[description]</td>";
			echo "<td>$product[price]</td>";
			$product_total = $product_list[$pro_id_list];
			echo "<td>$product_total</td>";
			echo "</tr>";
		}
		echo "<tr><td colspan='3'>ผลรวมราคาสินค้าทั้งหมด</td><td>$cart[total_price]</td><td>$cart[total]</td></tr>";
		echo "</table>";
	 ?>
	 <p><a href="order_form_page.php">ทำการสั่งซื้อ</a></p>
</div>