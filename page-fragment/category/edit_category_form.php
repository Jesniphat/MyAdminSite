<h2>แก้ไขหมวดหมู่สินค้าใหม่</h2>

<form action="action_controller.php?action=category/update_category_action" method="post" accept-charset="utf-8">
	
	<input type="hidden" name="category_id" value="<?php echo $ctg["id"]; ?>" />
	
	<p><span class="inputname">ชื่อหมวดหมู่สินค้า</span>
	<input type="text" name="name" class="textfield small" value="<?php echo $ctg["name"]; ?>" />
	<span class="formhelp">กรุณากรอกหมวดหมู่สินค้าใหม่</span></p>
	
	<p><span class="inputname">คำอธิบาย</span>
	<input type="text" name="description" class="textfield small" value="<?php echo $ctg["description"]; ?>"/>
	<span class="formhelp">กรุณากรอกคำอธิบาย</span></p>
	
	
	<div><input type="submit" name="button" class="button" value="แก้ไขหมวดหมู่สินค้า" /></div>
</form>