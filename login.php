<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<link href="Style/login_style.css" type="text/css" rel="stylesheet" />
<script>window.history.replaceState(null,null,window.location.href);</script> 
<body>
	<div class="header">
    	<div class="hesd_logo">
        	<a href="index.php"><img src="images/Logo.jpg" /></a>
        </div>
    	<div class="head_con">
        	<p>欢迎登录</p>
        </div>	
    </div>
    <div class="content">
    	<div class="content_log">
        	<div class="log_top">
            	<input type="button" value="扫码登录" id="button1" />
            	<input type="button" value="账号登录" id="button2"/>
            </div>
            <div id="log_con1">
            	<div class="log_mid">
            	<img src="images/7.jpg" />
                <img src="images/8.jpg" />
                <p>打开<a href="#">手机BT</a>&nbsp;&nbsp;<span>扫描二维码</span></p>
            	</div>
            	<div class="log_foot">
            		<ul>
                    	<li class="log_li1"><img src="images/9.jpg" /><a href="#">QQ</a></li>
                        <li class="log_li2"><img src="images/10.jpg" /><a href="#">微信</a></li>
                        <li class="log_li3"><img src="images/11.jpg" /><a href="register.php">立即注册</a></li>
                    </ul>
            	</div>
            </div>
            <div class="log_con2">
            	<div id="log_con_form">
            		<form method="post" id="form1" >
                    	<div id="log_con_form_div">
                        	<div class="log_con_form_div1"><p>请输入账户名</p></div>
                            <div class="log_con_form_div1"><p>请输入密码</p></div>
                            <div class="log_con_form_div1"><p>用户名不存在，请重新输入</p></div>
                            <div class="log_con_form_div1"><p>账户名或密码不匹配，请重新输入</p></div>
                            <div class="log_con_form_div1"><p>请输入账户名和密码</p></div>
                        </div>
                        <div class="log_con_form_div2">
                        	<div class="img1"></div>
                            <input type="text" placeholder=" 用户名/邮箱/已验证手机"
                            class="log_con_form_div2_input" name="username"/>
                        </div>
                        <div class="log_con_form_div"></div>
                        <div class="log_con_form_div2">
                        	<div class="img2"></div>
                            <input type="password" placeholder=" 密码"
                            name="password" class="log_con_form_div2_input" />
                        </div>
                        <div class="log_con_form_div"></div>
                        <div class="log_con_form_div3">
                             验证码
                            <input type="text" class="log_con_form_div2_code"/> 
                            <img src="PHP/verification.php" id="Code"/>
                        </div>
                        <span><a href="#">忘记密码？</a></span>
                        <input type="submit"name="ok" value="登录" class="form_btn"/>
                	</form> 
                    <div class="form_ul">
                	<ul>
                    	<li><img src="images/9.jpg" /><a href="#">QQ</a></li>
                        <li><img src="images/10.jpg" /><a href="#">微信</a></li>
                        <li><img src="images/11.jpg" /><a href="register.php">立即注册</a></li>
                    </ul>
                	</div>
                </div>
            </div>
    	</div>
    </div>
    <div class="footer">
    	<p>Copyright 版权所有  15304010277 姚加荣</p>
    </div>
</body>
</html>
<script>
	var oBtn1=document.getElementById('button1');
	var oBtn2=document.getElementById("button2");
	var oLgcon1=document.getElementById('log_con1');
	var oLgcon2=document.getElementById('log_con_form');
	oBtn1.style.color="red";
	oBtn1.onmouseover=function ()
	{
		oBtn1.style.color="red";
		oBtn2.style.color="black";
		oLgcon1.style.display="block";
		oLgcon2.style.display="none";	
	};
	oBtn2.onclick=function ()
	{				
		oBtn2.style.color="red";
		oLgcon1.style.display="none";
		oLgcon2.style.display="block";
						
	};
	oBtn2.onmouseover=function ()
	{
		oBtn2.style.color="red";
		oBtn2.style.textDecoration="underline";	
	};
	oBtn2.onmouseout=function ()
	{
		oBtn2.style.color="black";
		oBtn2.style.textDecoration="none";		
	};
	oLgcon1.onmouseover=function()
	{
		oBtn1.style.color="red";	
	};
    oLgcon2.onmouseover=function ()
	{
		oBtn2.style.color="red";
		oBtn2.style.textDecoration="underline";	
	};
</script>
<!--刷新验证码 -->
<script>
	var oCode =document.getElementById('Code');
	oCode.onclick=function ()
	{
		oCode.src="PHP/verification.php?+Math.random()";	
	};
</script>
<!-- -->
<script>
	function onlyshow ()
	{
		var oBtn1=document.getElementById('button1');
		var oBtn2=document.getElementById("button2");
		var oLgcon1=document.getElementById('log_con1');
		var oLgcon2=document.getElementById('log_con_form');
		oBtn1.style.color='black';
		oBtn2.style.color='red'; 
		oLgcon1.style.display='none';
		oLgcon2.style.display='block';
	};
</script>
<?php
	session_start();
	if(isset($_POST['ok']))
	{
		require_once( 'PHP\LinkMysql.php');
		$username=@$_POST['username'];
		$password=@$_POST['password'];
		$sql="select * from member where LoginName='$username'";
		$result=mysql_query($sql);
		$row=@mysql_fetch_array($result);
		$_SESSION['username']=$username;
		if($username==null)
		{
?>
		<script>
			onlyshow();
    		var oDiv=document.getElementById('log_con_form_div');
			var aDiv=oDiv.getElementsByTagName('div');
			aDiv[0].style.display='block'; 
    	</script>;
<?php		
		}
		else
		{
			if($password==null)
			{
?>			
				<script>
					onlyshow();
					var oDiv=document.getElementById('log_con_form_div');
					var aDiv=oDiv.getElementsByTagName('div');
					aDiv[1].style.display='block'; 	
            	</script>
<?php    		
			}
			else
			{
				if(!$row)
				{
?>			
					<script>
						onlyshow();
						var oDiv=document.getElementById('log_con_form_div');
						var aDiv=oDiv.getElementsByTagName('div');
						aDiv[2].style.display='block'; 	
            		</script>
<?php  			
				}
				else
				{
					if($password!==$row[2])
					{
?>			
						<script>
							onlyshow();
							var oDiv=document.getElementById('log_con_form_div');
							var aDiv=oDiv.getElementsByTagName('div');
							aDiv[3].style.display='block'; 	
            			</script>
<?php  
					}
					else
					{
?>
						<script>window.location.href="member/index.php?username=<?php echo $_SESSION['username'];?>";</script>
<?php						
					}
				}	
			}
		}
		if($username==null && $password==null)
		{
?>			
			<script>
				onlyshow();
				var oDiv=document.getElementById('log_con_form_div');
				var aDiv=oDiv.getElementsByTagName('div');
				aDiv[0].style.display='none'; 
				aDiv[4].style.display='block'; 	
            </script>
<?php 	
		}
	}
?>	    


