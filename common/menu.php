<ul id="navtabs">
	<li
		<?php
			if($_REQUEST["menu"]==1)
			{
				echo "id='current'";
			}
		?>
	><a href="index.php?menu=1">หน้าแรก</a></li>
	
	
	<li
		<?php
			if($_REQUEST["menu"]==2)
			{
				echo "id='current'";
			}
		?>
	><a href="action_controller.php?action=user/retrieve_user_action&menu=2">จัดการข้อมูลสมาชิก</a></li>
	
	
	<li
		<?php
			if($_REQUEST["menu"]==3)
			{
				echo "id='current'";
			}
		?>
	><a href="action_controller.php?action=category/retrieve_category_action&menu=3">จัดการข้อมูลหมวมหมู่สินค้า</a></li>
	
	
	<li
		<?php
			if($_REQUEST["menu"]==4)
			{
				echo "id='current'";
			}
		?>
	><a href="action_controller.php?action=product/retrieve_product_action&menu=4">จัดการข้อมูลสินค้า</a></li>
	
	
	<li
		<?php
			if($_REQUEST["menu"]==5)
			{
				echo "id='current'";
			}
		?>
	><a href="action_controller.php?action=Orders/retrieve_order_action&menu=5">จัดการข้อมูลกาสังซื้อ</a></li>
</ul>
<div class="clear"></div>