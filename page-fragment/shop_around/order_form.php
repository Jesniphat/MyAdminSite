<div id = "Orderform">
<h1>แบบฟอร์มการสั่งซื้อสินค้า</h1>
<form action="order_detail_action.php" method="post" accept-charset="utf-8">
	<h2>ข้อมูลการสั่งซื้อ</h2>
	<p>
		<label>ชื่อผู้สั่งซื้อ</label><input type="text" name="cfname" value="<? echo $_SESSION["customer"]["cfname"]; ?>" />
	</p>
	<p>
		<label>นามสกุล</label><input type="text" name="clname" value="<? echo $_SESSION["customer"]["clname"]; ?>" />
	</p>
	<p>
		<label>เบอร์โทร</label><input type="text" name="cphone" value="<? echo $_SESSION["customer"]["cphone"]; ?>" />
	</p>
	<p>
		<label>Email</label><input type="text" name="cemail" value="<? echo $_SESSION["customer"]["cemail"]; ?>" />
	</p>	
	<h2>ที่อยู่สำหรับจัดส่งสินค้า</h2>
	<p>
		<label>เลขที่</label><input type="text" name="addressnumber" value="<? echo $_SESSION["customer"]["addressnumber"]; ?>" />
	</p>
	<p>
		<label>ถนน</label><input type="text" name="street" value="<? echo $_SESSION["customer"]["street"]; ?>" />
	</p>
	<p>
		<label>เขต</label><input type="text" name="district" value="<? echo $_SESSION["customer"]["district"]; ?>" />
	</p>
	<p>
		<label>แขวง</label><input type="text" name="subdistrict" value="<? echo $_SESSION["customer"]["subdistrict"]; ?>" />
	</p>
	<p>
		<label>จังหวัด</label><input type="text" name="province" value="<? echo $_SESSION["customer"]["province"]; ?>" />
	</p>
	<p>
		<label>รหัสไปรษณี</label><input type="text" name="postcode" value="<? echo $_SESSION["customer"]["postcode"]; ?>" />
	</p>
	<p><input class="submit" type="submit" value="สั่งซื้อสินค้า" /></p>
</form>

</div>