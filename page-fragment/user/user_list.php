<?php
	//include_once("function/date_data_access.php");
?>

<p><a href="page_controller.php?page=user/new_user_form_page">เพิ่มสมาชิกใหม่</a></p>
<table>
    <tr>
    	<th>แก้ไข</th>
        <th>ID</th>
        <th>ชื่อ</th>
        <th>นามสกุล</th>
        <th>เบอร์โทร</th>
        <th>Email</th>
		<th>อายุ</th>
		<th>วันเวลาที่สมัคร</th>
    </tr>
	<?php
		foreach($u as $user)
		{
	?>	
			<tr>
				<td><a href="action_controller.php?action=user/edit_user_action&user_id=<?php echo $user['id']; ?>">แก้ไข</a> 
					<a href="action_controller.php?action=user/delete_user_action&user_id=<?php echo $user['id']; ?>">ลบ</a></td>
				<td><?php echo $user["id"] ?></td>
				<td><?php echo $user["fname"] ?></td>
				<td><?php echo $user["lname"] ?></td>
				<td><?php echo $user["phone"] ?></td>
				<td><?php echo $user["email"] ?></td>
				<td><?php echo $user["age"] ?></td>
				<td><?php echo mytime($user["registeron"]); ?></td>
			</tr>
		
	<?php	
		}
	?>
</table>
