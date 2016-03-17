<?php
	include_once("function/category_data_access.php");
	$category = read_all_category();
?>

<h2>หมวดหมู่สินค้า <span></span></h2>
<div class="box-content">
	<ul>
		<?php
			foreach($category as $cat)
			{		?>
	    <li><a href="list_product_by_catid_action.php?cat_id=<? echo $cat["id"]; ?>"><? echo $cat["name"] ?></a></li>
	    <?php
			}
		?>
	</ul>
</div>