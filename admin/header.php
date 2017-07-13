<?php 
session_start(); 
error_reporting(0);
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link type="text/css" rel="stylesheet" href="css/header.css" />
</head>

<body>
	<div class="header">
    	<p>
        <a href="../index.php"><img src="../images/Logo.jpg" /></a>
        欢迎<?php echo $_SESSION['administrator'];?>来到后台管理
        <a href="safe.php">[ 退出 ]</a>
        </p>
    </div>
</body>
</html>
