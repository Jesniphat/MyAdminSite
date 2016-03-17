
<p><a href="page_controller.php?page=category/new_category_form_page">เพิ่มหมวดหมู่สินค้า</a></p>
<table>
	<tr>
		<th>แก้ไข</th>
		<th>ID</th>
		<th>ชื่อหมวดหมู่สินค้า</th>
		<th>คำอธิบาย</th>
	</tr>
	<?php
		foreach($c as $category)
		{
	?>
			<tr>
				<td><a href="action_controller.php?action=category/get_category_action&category_id=<?php echo $category['id']; ?>">แก้ไข </a>
					<a href="action_controller.php?action=category/delete_category_action&category_id=<?php echo $category['id']; ?>">ลบ</a>
					<a href="action_controller.php?action=product/open_new_product_action&category_id=<?php echo $category['id']; ?>">เพิ่มสินค้า</a></td>
				<td><?php echo $category["id"]; ?></td>
				<td><?php echo $category["name"]; ?></td>
				<td><?php echo $category["description"]; ?></td>
			</tr>
	<?php
		}
	?>
	
</table>