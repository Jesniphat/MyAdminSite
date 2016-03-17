<h1>หน้ารายละเอียดคำถามหรือกระทู้</h1>
<?php
		echo "<h2 style='padding-top:10px;'>";
		echo "คำถามที่: หัวข้อคำถาม $forum[subject] : ($forum[createdon])";
		echo "</h2>";
		echo "<h2 style='padding-left:10px;'>";
		echo "ชื่อผู้ถาม :$forum[writername]";
		echo "</h2>";
		echo "<p>";
		echo "$forum[details]";
		echo "</p>";
 ?>
 
 <div id="commentlist">
 	<h2>คำตอบหรือความคิดเห็นของคำถามนี้</h2>
	<?php
		$count = 1;
		foreach($comments as $comment)
		{
	?>		
			<div class='commentbox'>
	<?php
			echo "<p>";
			echo "คำตอบหรือความคิดเห็นที่ $count: $comment[comment]";
			echo "</p>";
			echo "<h2>ชื่อผู้ตอบ: $comment[writername] IP Address: $comment[writerip] ตอบเมื่อ: $comment[createdon]</h2>";
	?>
			</div>
	<?php		
			$count++;
		}
	?>
 </div>
 
 <div id="CommentForm">
	<h2>แบบฟอร์มสำหรับตอบคำถามหรือแสดงความคิดเห็น</h2>
	<form action="create_comment_action.php" method="post">
		<input name="forum_id" value="<?php echo $forum["id"]; ?>" type="hidden"/>
		<label>ชื่อผู้ตอบ</label>
		<input type="text" name="writername" />
		<label>รายละเอียดคำตอบหรือความคิดเห็น</label>
		<textarea name="comment"></textarea>
		<br/>
		<input type="submit" value="ส่งคำตอบหรือความคิดเห็น" />
	</form>
</div>