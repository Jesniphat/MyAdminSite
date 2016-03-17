<h1>ยินดีต้อนรับสู่ JNP_Shop</h1>
<p>ขายสินค้า fashion ทุกแบบ</p>

<!-- Products -->
<div class="products">
	<div class="cl">&nbsp;</div>
	<ul>
		<?php
			foreach($product as $show_pro)
			{
		?>
	    <li>
	    	<a href="view_product_action.php?product_id=<? echo $show_pro['id'] ?>"><img src="<? echo $show_pro["image"]; ?>" alt="" width="200" /></a>
	    	<div class="product-info">
	    		<h3><a href="view_product_action.php?product_id=<? echo $show_pro['id'] ?>"><? echo $show_pro["name"] ?></a></h3>
	    		<div class="product-desc">
					<h4><? echo $show_pro["cname"] ?></h4>
	    			<p><? echo $show_pro["description"] ?><br /></p>
	    			<strong class="price"><? echo $show_pro["price"] ?>บาท</strong>
					<p><a href="add_tocart_action.php?product_id=<? echo $show_pro['id'] ?>">เลือกสินค้าใส่ตะกร้า</a></p>
	    		</div>
	    	</div>
    	</li>
		<?php
			}
		?>
	</ul>
	<div class="cl">&nbsp;</div>
</div>
<!-- End Products -->