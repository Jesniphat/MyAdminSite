<h1 style="margin:10px 0 15px 0;">รายชื่อกระทู้หรือคำถามภายใต้ webboard "<?php echo $webboard["name"]; ?>"</h1>

<?php 
	$count = 1;
	foreach($forum as $for)
	{
		echo "<h2 style='padding-top:10px;'>";
		echo "คำถามที่ $count : <a href='view_forum_action.php?forum_id=$for[id]'>หัวข้อคำถาม</a> $for[subject] ($for[createdon])";
		echo "</h2>";
		echo "<h2 style='padding-left:10px;'>";
		echo "ชื่อผู้ถาม :$for[writername]";
		echo "</h2>";
		echo "<p>";
		echo "$for[details]";
		echo "</p>";

		$count++;
	}
 ?>
 
 
 <div id="forum_form" style="margin-top:25px;">
 	<h2 style="margin-top:10px;">แบบฟอร์มสำหรับถามคำถามหรือตั้งกระทู้ใหม่</h2>
 	<form action="create_forum_action.php" method="" accept-charset="utf-8">
 		
		<input type="hidden" name="webboard_id" value="<?echo $webboard_id ; ?>">
		
 		<label>ชื่อผู้ถาม</label>
		<input type="text" name="wrietername" />
		
		<label>ชื่อคำถาม</label>
		<input type="text" name="subject" />
		
		<label>รายละเอียดคำถาม</label>
		<textarea name="details"></textarea>
		
		<p><input type="submit" value="ส่งคำถาม" /></p>
	</form>
 </div>