<h1>รายละเอียดสินค้า</h1>

<div id="productDetail">
	<div id="productDetailImage">
		<img id="myimg" src="<?php echo $product['image']; ?>" />
	</div>
	<div id="productDetailDes">
		<h2>ชื่อสินค้า <?php echo $product["name"]; ?></h2>
		<h3><?php echo $product["description"]; ?></h3>
		<p>ราคา <?php echo $product["price"]; ?></p>
	</div>
	<div class="clear"></div>
</div>
<div id="productcomment">
	<h3>ความคิดเห็นของสินค้านี้</h3>
	<?php
		foreach($productcomment as $pro_com)
		{
			echo "<p> $pro_com[writername]: $pro_com[comment] </p>";
		}
	?>
<div id="commentForm">
	<h1>แบบฟอร์มแสดงความคิดเห็นหรือคำถามต่อสินค้า</h1>
	<form action="create_product_comment_action.php" method="post" accept-charset="utf-8">
		<input type="hidden" name="product_id" value="<? echo $product['id'] ?>">
		<label for="writername">ชื่อ: </label>
		<input type="text" name="writername" id="writername" />
		<br />
		<label for="comment" >ความคิดเห็น/คำถาม</label>
		<textarea style="width:400px;height:100px;" id"comment" name="comment"></textarea>
		<br />
		<p><input type="submit" value="เพิ่มความคิดเห็น" /></p>
	</form>
</div>
</div>