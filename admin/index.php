<?php 
session_start(); 
error_reporting(0);
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
require_once("../PHP/LinkMysql.php");
?>
<title>用户管理登录</title>
<link type="text/css" rel="stylesheet" href="css/index.css" />
</head>
<body>
<?php 
	include("header.php");
	if(isset($_SESSION[manager])){
		?>
	<script language="javascript" type="text/javascript">
   		location.href='admin.php';
	</script>
	<?php
	}else{
	?>
<div>
<form name="LoginForm" method="post" action="?action=safe" onSubmit="return InputCheck(this)">
	<div class="login">
    	管理登录
    	<p>
   			管理员:
            <input id="username" name="username" type="text" class="input" />
    	</p>
		<p>
        	密&nbsp;&nbsp;码:
            <input id="password" name="password" type="password" class="input" />
        </p>
		<input type="submit" name="submit" value="  确 定  "  class="btn"/>
	</div>
</form>
</div>
<?php include("footer.php");?>
<script language="javascript">
LoginForm.username.focus();
</script>    
</body>
</html>
<?php
	}
if($_GET[action]&&$_GET[action]=="safe"){
	$username=$_POST[username];
	$psd=$_POST[password];
	$sql="select * from users where username=".$username;
	$query=mysql_query($sql);
	$row=0;
	while($array=mysql_fetch_array($query))
		{
            $content[$row]=$array;
            $row++;
		}
	if($query)
	{
		if($content[0][root]=="manager")
		{
			if($content[0][psd]==$psd)
			{
					$_SESSION[manager]=$username;
	?>
	<script language="javascript" type="text/javascript">
   		setTimeout("javascript:location.href='admin.php'",1000); 
	</script>
	<?php
			}
			else
			{
	?>
				<script language="javascript" type="text/javascript">
   					alert("密码错误！"); 
				</script>
	<?php
			}
		}
		else
		{
	?>
			<script language="javascript" type="text/javascript">
   				alert("没有管理权限！"); 
			</script>
	<?php
		}
	}
}
		
?>