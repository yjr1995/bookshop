<?php
	$dbhost = 'localhost';  // mysql服务器主机地址
	$dbuser = 'root';            // mysql用户名
	$dbpass = '';          // mysql用户名密码
	$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ("服务器连接失败".mysql_error());
	mysql_select_db("bookshop",$conn) or die("数据库连接失败".mysql_error());
	mysql_query("set names 'utf8'");
?>