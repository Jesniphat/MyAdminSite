<?php
	session_start();
	
	include_once("function/product_data_access.php");
	
	$cfname = $_REQUEST["cfname"];
	$clname = $_REQUEST["clname"];
	$cphone = $_REQUEST["cphone"];
	$cemail = $_REQUEST["cemail"];
	
	$addressnumber = $_REQUEST["addressnumber"];
	$street = $_REQUEST["street"];
	$district = $_REQUEST["district"];
	$subdistrict = $_REQUEST["subdistrict"];
	$province = $_REQUEST["province"];
	$postcode = $_REQUEST["postcode"];
	
	
	$customer = array();
	$customer["cfname"] = $cfname;
	$customer["clname"] = $clname;
	$customer["cphone"] = $cphone;
	$customer["cemail"] = $cemail;
	$customer["addressnumber"] = $addressnumber;
	$customer["street"] = $street;
	$customer["district"] = $district;
	$customer["subdistrict"] = $subdistrict;
	$customer["province"] = $province;
	$customer["postcode"] = $postcode;
	
	$_SESSION["customer"] = $customer;
	
	
	
	include("order_detail_page.php");
?>