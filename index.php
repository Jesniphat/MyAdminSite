<?php
	
	session_start();
	
	if(isset($_SESSION["login"]))
	{
		$_main_layout_content = "page-fragment/index.php";
		include ("layout/main_layout.php");
	
	}
	else
	{
		include("login_page.php");
	}
	
	
	
?>