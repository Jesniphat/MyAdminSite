<h2>แบบฟอร์มแก้ไขข้อมูลสมาชิก</h2>

<form action="action_controller.php?action=user/update_user_action" method="post" accept-charset="utf-8">
	
	<input type="hidden" name="user_id" value="<?php echo $us["id"]; ?>" />
	
	<p><span class="inputname">ชื่อ</span>
	<input type="text" name="fname" class="textfield small" value="<?php echo $us["fname"]; ?>" />
	<span class="formhelp">กรุณากรอกชื่อสมาชิกใหม่</span></p>
	
	<p><span class="inputname">นามสกุล</span>
	<input type="text" name="lname" class="textfield small" value="<?php echo $us["lname"]; ?>" />
	<span class="formhelp">กรุณากรอกนามสกุลสมาชิกใหม่</span></p>
	
	<p><span class="inputname">Email</span>
	<input type="text" name="email" class="textfield small" value="<?php echo $us["email"]; ?>" />
	<span class="formhelp">กรุณากรอก Email สมาชิกใหม่</span></p>
	
	<p><span class="inputname">เบอร์โทร</span>
	<input type="text" name="phone" class="textfield small" value="<?php echo $us["phone"]; ?>" />
	<span class="formhelp">กรุณากรอก เบอร์โทร สมาชิกใหม่</span></p>
	
	<p><span class="inputname">อายุ</span>
	<input type="text" name="age" class="textfield small" value="<?php echo $us["age"]; ?>" />
	<span class="formhelp">กรุณากรอก อายุ สมาชิกใหม่</span></p>

	<div><input type="submit" name="button" class="button" value="แก้ไข" /></div>
</form>