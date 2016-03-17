<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Untitled Document</title>
	</head>
	<body>
		<?php
			$pic_type1 = $_FILES["product_pic1"]["type"];
			$save_pic1 = "uploaded_file/".$_FILES["product_pic1"]["name"];
			
			if($pic_type1=="image/jpeg"||$pic_type1=="image/pjpeg"
				||$pic_type1=="image/gif")
			{
				if($_FILES["product_pic1"]["size"]<=600000)
				{
					if(file_exists($save_pic1))
					{
						echo "มีรูปนี้อยู่แล้ว";
					}
					else
					{
						echo "ชื่อรูป1: ".$_FILES["product_pic1"]["name"]."<br />";
						echo "ชนิด1: " . $_FILES["product_pic1"]["type"] . "<br/>";
						echo "ขนาด1: " . $_FILES["product_pic1"]["size"] . " kB<br>";
						echo "ที่อยู่(Folder)ชั่วคราว1: " .$_FILES["product_pic1"]["tmp_name"];
						
						move_uploaded_file($_FILES["product_pic1"]["tmp_name"],
						$save_pic1);
						
						echo "<br />";
						echo "<img src='$save_pic1'/>";
					}
				}
				else
				{
					echo "ขนาดรูปใหญ่เกินไป1";
				}
				
			}
			else
			{
				echo "ไม่อนุญาติให้ upload file ประเภทนี้กรุณาอัพรูปที่เป็น .jpg เท่านั้น";
			}
			
			
			//upload2
			
			$pic_type2 = $_FILES["product_pic2"]["type"];
			$save_pic2 = "uploaded_file/".$_FILES["product_pic2"]["name"];
			
			if($pic_type2=="image/jpeg"||$pic_type2=="image/pjpeg"
				||$pic_type2=="image/gif")
			{
				if($_FILES["product_pic2"]["size"]<=600000)
				{
					if(file_exists($save_pic2))
					{
						echo "มีรูปนี้อยู่แล้ว";
					}
					else
					{
						echo "ชื่อรูป2: ".$_FILES["product_pic2"]["name"]."<br />";
						echo "ชนิด2: " . $_FILES["product_pic2"]["type"] . "<br/>";
						echo "ขนาด2: " . $_FILES["product_pic2"]["size"] . " kB<br>";
						echo "ที่อยู่(Folder)ชั่วคราว2: " . $save_pic2;
						
						move_uploaded_file($_FILES["product_pic2"]["tmp_name"],
						$save_pic2);
						
						echo "<br />";
						echo "<img src='$save_pic2'/>";
					}
				}
				else
				{
					echo "ขนาดรูปใหญ่เกินไป2";
				}
				
			}
			else
			{
				echo "ไม่อนุญาติให้ upload file ประเภทนี้กรุณาอัพรูปที่เป็น .jpg เท่านั้น";
			}
			
		?>
	</body>
</html>
	
