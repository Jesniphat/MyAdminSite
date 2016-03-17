<?php
	define("DB_SERVER","localhost");
	define("DB_USERNAME","root");
	define("DB_PASSWORD","p@ssw0rd");

	function connect_db()
	{
		$con = mysql_pconnect(DB_SERVER,DB_USERNAME,DB_PASSWORD);//เชื่อมต่อกับโปรแกรมฐานข้อมูล MySQL
		
			if(!$con)
			{
				die("เกิดปัญหาไม่สามารถเชื่อมต่อกับฐานข้อมูลได้ เพราะ ".mysql_error());
			}
			
			mysql_select_db("myadmin",$con);//เลืิอกฐานข้อมูล
			
			mysql_query("SET NAMES utf8",$con);//บอกการเข้ารหัสตัวอักษรของข้อมูลที่เก็บในฐานข้อมูล
			return $con;
	}
?>