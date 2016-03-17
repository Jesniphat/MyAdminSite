<h2>แบบฟอร์มเพิ่มสินค้าใหม่</h2>

<form action="action_controller.php?action=product/create_product_action" method="post" enctype="multipart/form-data">
	<p><span class="inputname">ชื่อสินค้า</span>
	<input type="text" name="name" class="textfield small" />
	<span class="formhelp">กรุณากรอกชื่อสินค้าใหม่</span></p>
	
	<p><span class="inputname">คำอธิบาย</span>
	<input type="text" name="description" class="textfield small" />
	<span class="formhelp">กรุณากรอกคำอธิบาย</span></p>
	
	<p><span class="inputname">ราคา</span>
	<input type="text" name="price" class="textfield small" />
	<span class="formhelp">กรุณากรอกคาราสินค้า</span></p>
	
	<p><span class="inputname">เลือกรูปสินค้า</span>
	<input type="file" name="product_image" class="textfield small" />
	<span class="formhelp">กรุณาเลือกรูปสินค้า</span></p>
	
	<p><span class="inputname">หมวดหมู่สินค้า</span>
	
	<select name="category_id">
		<?php
			foreach($category as $cat)
			{
		?>
		<option 
		<?php
		$category_id = $_REQUEST["category_id"];
			if(isset($category_id))
			{
				if($category_id == $cat["id"])
				{
					echo "selected='selected'";
				}
			}
		?>
		
		value="<? echo $cat["id"]; ?>"><? echo $cat["name"]; ?></option>
		<?php
			
			}
		?>
	</select>
	
	<span class="formhelp">กรุณาเลือกหมวดหมู่สินค้า</span></p>
	
	
	<div><input type="submit" name="button" class="button" value="เพิ่มสินค้า" /></div>
</form>