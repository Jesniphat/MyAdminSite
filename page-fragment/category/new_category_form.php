<h2>แบบฟอร์มเพิ่มหมวดหมู่สินค้าใหม่</h2>

<form action="action_controller.php?action=category/create_category_action" method="post" accept-charset="utf-8">
	<p><span class="inputname">ชื่อหมวดหมู่สินค้า</span>
	<input type="text" name="cname" class="textfield small" />
	<span class="formhelp">กรุณากรอกชื่อสมาชิกใหม่</span></p>
	
	<p><span class="inputname">คำอธิบาย</span>
	<input type="text" name="cdescription" class="textfield small" />
	<span class="formhelp">กรุณากรอกคำอธิบาย</span></p>
	
	
	<div><input type="submit" name="button" class="button" value="เพิ่มหมวดหมู่สินค้า" /></div>
</form>