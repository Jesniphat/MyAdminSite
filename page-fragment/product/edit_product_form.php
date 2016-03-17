<h2>แบบฟอร์มแก้ไขสินค้าใหม่</h2>

<form action="action_controller.php?action=product/update_product_action" method="post" enctype="multipart/form-data">
	
	<input type="hidden" name="product_id" value="<? echo $product["id"]; ?>">
	
	<p><span class="inputname">ชื่อสินค้า</span>
	<input type="text" name="name" class="textfield small" value="<? echo $product["name"]; ?>" />
	<span class="formhelp">กรุณากรอกชื่อสินค้าใหม่</span></p>
	
	<p><span class="inputname">คำอธิบาย</span>
	<input type="text" name="description" class="textfield small" value="<? echo $product["description"]; ?>" />
	<span class="formhelp">กรุณากรอกคำอธิบาย</span></p>
	
	<p><span class="inputname">ราคา</span>
	<input type="text" name="price" class="textfield small" value="<? echo $product["price"]; ?>" />
	<span class="formhelp">กรุณากรอกคาราสินค้า</span></p>
	
	<p><span class="inputname">เลือกรูปสินค้า</span>
	<input type="file" name="product_image" class="textfield small" value="<? echo $product["image"]; ?>"/>
	<span class="formhelp">กรุณาเลือกรูปสินค้า</span></p>
	
	<p><span class="inputname">หมวดหมู่สินค้า</span>
	
	<select name="category_id">
		<?php
			foreach($category as $cat)
			{
		?>
		<option
		
		<?php
			if($product["categoryid"]==$cat["id"])
			{
				echo "selected='selected'";
			}
		?>
		
		 value="<? echo $cat["id"]; ?>"><? echo $cat["name"]; ?></option>
		<?php
			
			}
		?>
	</select>
	
	<span class="formhelp">กรุณาเลือกหมวดหมู่สินค้า</span></p>
	
	
	<div><input type="submit" name="button" class="button" value="แก้ไขสินค้า" /></div>
</form>