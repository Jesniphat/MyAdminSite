<h2>แบบฟอร์มเพิ่มข้อมูลสมาชิกใหม่</h2>
<p><?php echo $error_massager; ?></p>

<form action="action_controller.php?action=user/create_user_action" method="post" accept-charset="utf-8">
	<p><span class="inputname">ชื่อ</span>
	<input type="text" name="fname" class="textfield small" value="<?php echo $fname; ?>" />
	<span class="formhelp">กรุณากรอกชื่อสมาชิกใหม่</span></p>
	
	<p><span class="inputname">นามสกุล</span>
	<input type="text" name="lname" class="textfield small" value="<?php echo $lname; ?>" />
	<span class="formhelp">กรุณากรอกนามสกุลสมาชิกใหม่</span></p>
	
	<p><span class="inputname">Email</span>
	<input type="text" name="email" class="textfield small" value="<?php echo $email; ?>" />
	<span class="formhelp">กรุณากรอก Email สมาชิกใหม่</span></p>
	
	<p><span class="inputname">เบอร์โทร</span>
	<input type="text" name="phone" class="textfield small" value="<?php echo $phone; ?>" />
	<span class="formhelp">กรุณากรอก เบอร์โทร สมาชิกใหม่</span></p>
	
	<p><span class="inputname">อายุ</span>
	<input type="text" name="age" class="textfield small" value="<?php echo $age; ?>" />
	<span class="formhelp">กรุณากรอก อายุ สมาชิกใหม่</span></p>
	
	<p><span class="inputname">username</span>
	<input type="text" name="username" class="textfield small" value="<?php echo $username; ?>" />
	<span class="formhelp">กรุณากรอก username</span></p>
	
	<p><span class="inputname">password</span>
	<input type="password" name="password" class="textfield small" value="<?php echo $password; ?>" />
	<span class="formhelp">กรุณากรอก password</span></p>

	<div><input type="submit" name="button" class="button" value="เพิ่มสมาชิก" /></div>
</form>