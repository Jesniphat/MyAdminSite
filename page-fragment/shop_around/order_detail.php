<div id="OrderDetial">
	<h1>ข้อมูลผู้สั่งซื้อสินค้า</h1>
	<p>ชื่อ :<?php echo $_SESSION["customer"]["cfname"]; ?></p>
	<p>นามสกุล :<?php echo $_SESSION["customer"]["clname"]; ?></p>
	<p>เบอร์โทร :<?php echo $_SESSION["customer"]["cphone"]; ?></p>
	<p>อีเมลล์ :<?php echo $_SESSION["customer"]["cemail"]; ?></p>
	<h2>ที่อยู่ที่จะให้จัดส่ง</h2>
	<p>บ้านเลขที่ :<?php echo $_SESSION["customer"]["addressnumber"]; ?></p>
	<p>ถนน :<?php echo $_SESSION["customer"]["street"]; ?></p>
	<p>เขต :<?php echo $_SESSION["customer"]["district"]; ?></p>
	<p>แขวง:<?php echo $_SESSION["customer"]["subdistrict"]; ?></p>
	<p>จังหวัด :<?php echo $_SESSION["customer"]["province"]; ?></p>
	<p>รหัสไปรษณี :<?php echo $_SESSION["customer"]["postcode"]; ?></p>
	
	<div id="shoppingcart">
		<h1>รายล่ะเอียดการสั่งซื้อ</h1>
		<p>สินค้าในตะกร้า: <?php echo $_SESSION["cart"]["total"]; ?></p>
		<p>ราคารวมทั้งหมด: <?php echo $_SESSION["cart"]["total_price"]; ?></p>
		<!--<p><?php print_r($_SESSION["cart"]); ?></p>-->
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
		 
	</div>
	<div><a href="confirm_order_action.php" style="display:block; width:100px; height:30px; border:1px solid red; background:#c0c0c0; padding:7px 0 0 20px; margin:7px; float:left;">ยืนยันการสั่งซื้อ</a></div>
	<div><a href="order_form_page.php" style="display:block; width:75px; height:30px; border:1px solid red; background:#c0c0c0; padding:7px 0 0 45px; margin:7px; float:left;">แก้ไข</a></div>
</div>