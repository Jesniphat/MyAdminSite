<?php
	
	include_once("setting/database_setting.php");
	
	

	function read_all_user()
	{
		$con = connect_db();
			
			$result = mysql_query("select * from user ORDER BY id DESC");
			
			$users = array();
			
			while($row = mysql_fetch_array($result))
			{
				array_push($users, $row);
			}
			return $users;
			
	}
	
	function creat_user($fname,$lname,$email,$phone,$age,$username,$password)
	{
		$con = connect_db();
			
			$sql = "
			insert into user(fname,lname,email,phone,age,username,password,registeron)
			values('$fname','$lname','$email','$phone',$age,'$username','$password',NOW())
			";
			
			if (!mysql_query($sql,$con))
			{
				die("เกิดปัญหา: ".mysql_error());
			}
			
			$userid = mysql_insert_id();
			return $userid;
			
	}
	
	function count_user_by_email($email)
	{
		$con = connect_db();
			
			$result = mysql_query("select count(*) as total_user from user where email='$email'");
			
			$total_user_row = mysql_fetch_array($result);
			$total_user = $total_user_row["total_user"];
			return $total_user;
	}




	function count_user_by_username($username)
	{
		$con = connect_db();
			
			$result = mysql_query("select count(*) as total_username from user where username='$username'");
			
			$total_username_row = mysql_fetch_array($result);
			$total_username = $total_username_row["total_username"];
			return $total_username;
	}





	
	function get_user_by_id($user_id)
	{
		$con = connect_db();
			
			$result = mysql_query("select * from user where id=$user_id");
			$user = mysql_fetch_array($result);
			
			return $user;
		
	}
	
	function update_user($user_id,$fname,$lname,$email,$phone,$age)
	{
		$con = connect_db();
		
		$sql_ud = "update user
				set fname = '$fname',
					lname = '$lname',
					email = '$email',
					phone = '$phone',
					age = '$age'
				where id = $user_id
				";
		if(!mysql_Query($sql_ud,$con))
		{
			die("สั่งงานฐานข้อมมูลผิดพลาดเพราะ :".mysql_error());
		}
			
	}
	
	function delete_user($user_id)
	{
		$con = connect_db();
		
		$sql_dl = "delete from user where id=$user_id";
		
		if(!mysql_query($sql_dl,$con))
		{
			die("ลบข้อมมูลผิดพลาด :".mysql_error());
		}
	}
	
	function reed_user_by_user_name($username)
	{
		$con = connect_db();
		
		$result = mysql_query("select * from user where username = '$username'");
		
		$user = mysql_fetch_array($result);
		
		return $user;
		
	}
?>























