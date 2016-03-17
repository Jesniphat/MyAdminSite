<?php
	//include_once("function/date_data_access.php");
?>

<div id="catbox">
<p><a id="me"href="action_controller.php?action=product/open_new_product_action">เพิ่มสินค้า</a></p>
<?php
	foreach($category as $aaa){
?>
	<a href="action_controller.php?action=product/retrieve_product_action&catid=<? echo $aaa['id'] ?>">
		<? echo $aaa["name"]; ?> </a>
	<hr />
<?php
	}
?>
</div>


<div id="prolist">
<h2>รายการสินค้าทั้งหมด</h2>

<table>
	<tr>
		<th>แก้ไข</th>
		<th>ID</th>
		<th>ชืื่อสินค้า</th>
		<th>ราคา</th>
		<th>คำอธิบาย</th>
		<th>เวลาที่เพิ่มสินค้า</th>
		<th>หมวดหมู่สินค้า</th>
		<th>รูป</th>
	</tr>
	<?
		foreach($products as $product)
		{
	?>
			<tr>
				<td><a href="action_controller.php?action=product/get_product_action&product_id=<? echo $product["id"]; ?>">แก้ไข </a>
				<a href="action_controller.php?action=product/delete_product_action&product_id=<? echo $product["id"]; ?>">ลบ</a></td>
				<td><? echo $product["id"]; ?></td>
				<td><? echo $product["name"]; ?></td>
				<td><? echo $product["price"]; ?></td>
				<td><? echo $product["description"]; ?></td>
				<td><? echo mytime($product["createdOn"]); ?></td>
				<td><? echo $product["cname"]; ?></td>
				<td><img src="<?php echo $product['image'] ?>" width="150" /></td>
			</tr>
	<?
		}
	?>	
</table>

</div>

