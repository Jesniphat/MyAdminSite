<h2>รายการสั่งซื้อสินค้า</h2>

<table>
	<tr>
		<th>หมายเลขสั่งซื้อ</th>
		<th>ข้อมูลผู้สั่ง</th>
		<th>ที่อยู่จัดส่งสินค้า</th>
		<th>ข้อมูลสิค้าทีี่สั่ง</th>
		<th>ราคารวม</th>
	</tr>
	<?php
		foreach($orders as $order)
		{
	?>
			<tr>
				<td><?php echo $order["id"]; ?></td>
				<td><?php echo "ชื่อ $order[cfname] นามสกุล  $order[clname] อีเมลล์ $order[cemail] "; ?></td>
				<td><?php echo "เลขที่ $order[addressnumber] ถนน $order[street] เขต $order[district] แขวง $order[subdistrict] จังหวัด $order[province] รหัสไปรษณีย์ $order[postcode]"; ?></td>
				<td>
					
					<?php
						foreach($order["product_orders"] as $product_order)
						{
							$product = get_product_by_id($product_order["productid"]);
							echo $product["name"]."จำนวน".$product_order["item"] ."ชิ้น";
							echo "<br />";
						}
						
						
						
					?>
					
				</td>
				<td><?php echo $order["totalprice"]; ?></td>
			</tr>
	<?php
		}
	?>
	
</table>