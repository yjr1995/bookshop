<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<link rel="stylesheet" type="text/css" href="Style/register_style.css" />
<script type="text/javascript" src="js/jquery.cityselect.js"></script>
<script type="text/javascript" src="js/jsAddresss.js"></script>
<script type="text/javascript" src="js/detection.js"></script>
<body>
	<div class="header">
    	<div class="head_logo">
        	<a href="index.php"><img src="images/Logo.jpg" /></a>
        </div>
    	<div class="head_con">
        	<div class="head_con_l">
            	<p>欢迎注册</p>
            </div>
            <div class="head_con_r">
            	<p>已有账号？<a href="login.php">请登录</a></p>
            </div>
        </div>	
    </div>
    <div class="content">
    	<div class="cont_reg">
        	<form method="post" action="PHP/regdata.php" onsubmit="return detection(this)" >
            	<div class="con_reg_div1">
                	<label>用 户 名</label>
                	<input type="text" placeholder="您的账户名和登录名" class="con_div1_filed"                     id="regName" name="regName" onchange="CallServer()" />
                    <span id="span"></span>
                </div>
                <div class="con_reg_div2">
                	<div id="rename_filed1"><p>支持中文、字母、数字、“-”“_”的组合，4-20个字符</p>                    </div>
                	<div id="rename_filed2"><p>长度只能在4-20个字符之间</p></div>
                    <div id="rename_filed3"><p>用户名不能是纯数字，请重新输入！</p></div>                 
                </div>
                <div class="con_reg_div1" >
                	<label>设置密码</label>
                    <input type="text" placeholder="建议至少使用两种字符组合" class="con_div1_filed" 
                    id="regPass" name="regPass"/> 
                    <div id="i_status2"></div>
                </div>
                <div class="con_reg_div2">
                	<div id="regpass_filed1"><p>建议使用字母、数字和符号两种及以上的组合，6-20个字符</p></div>
                    <div id="regpass_filed2"><p>长度只能在6-20个字符之间</p></div>
                	<div id="regpass_filed3"><p>有被盗风险,建议使用字母、数字和符号两种及以上组合</p></div>
                    <div id="regpass_filed4"><p>安全强度适中，可以使用三种以上的组合来提高安全强度</p></div>
                    <div id="regpass_filed5"><p>你的密码很安全</p></div>
                </div>
                <div class="con_reg_div1">
                	<label>确认密码</label>
                    <input type="password" placeholder="请再次输入密码" class="con_div1_filed" 
                    id="regpaw" name="regpaw"/>
                    <div id="i_status3"></div>
                </div>
                <div class="con_reg_div2">
                	<div id="regpaw_filed1"><p>请再次输入密码</p></div>
                	<div id="regpaw_filed2"><p>两次输入密码不正确！</p></div>
                </div>
                <div class="con_reg_div1">
                	<label>手机号码</label>
                	<input type="text" placeholder="常用的手机号" class="con_div1_filed" id="regTel"
                    name="regTel"/>
                    <div id="i_status4"></div>
                </div>
                <div class="con_reg_div2">
                	<div id="regtel_filed1"><p>完成验证后，你可以用该手机登录和找回密码</p></div>
                	<div id="regtel_filed2"><p>手机号码格式不正确！</p></div>
                </div>
                <div class="con_reg_div1">
                	<label>验证码</label>
                	<input type="text" class="con_div1_filed" placeholder="请输入验证码" id="Code" name="Code"/>
                    <img  src="PHP/verification.php"id="Recode" onclick="code();">
                </div>
                <div class="con_reg_div2">
                	<div id="regcode_filed1"><p>看不清？点击图片更换验证码</p></div>
                </div>
                 <script>
                	function code()
					{
						var oCode=document.getElementById('Recode');
						oCode.src="PHP/verification.php?" + Math.random();	
					};
                </script>
                <div class="con_reg_div1">
                	<label>地&nbsp;&nbsp;址</label>
                    <div class="city">
                        <select class="reg_address" name="cmbProvince" id="cmbProvince"></select>   
                        <select class="reg_address" name="cmbCity" id="cmbCity" ></select>  
                        <select class="reg_address" name="cmbArea" id="cmbArea"></select>
                    </div>
                    <script type="text/javascript">  
                    addressInit('cmbProvince', 'cmbCity', 'cmbArea');  
               		</script>
                </div>
                <div class="con_reg_div2" id="regAdress"></div>
                <div class="con_reg_sub">
                	<input type="submit" value="完成注册" class="con_reg_sub_filer" id="ok" name="submit" />
                </div>
            </form>
        </div>
    </div>
    <div class="footer">
    	<p>Copyright 版权所有  15304010277 姚加荣</p>
    </div>
</body>
</html>
<script>
	$(document).ready(function() {
		 $(".city").citySelect({
				prov: "湖南",
				city: "长沙",
				dist: "雨花区",
				nodata: "none"
			});
	});
</script>
<script>
 	window.onload=function ()
		{
			var oIstatus1=document.getElementById('i_status1');
			var oIstatus2=document.getElementById('i_status2');
			var oIstatus3=document.getElementById('i_status3');
			var oIstatus4=document.getElementById('i_status4');
			var oRegname=document.getElementById('regName');
			var oRegname_filed1=document.getElementById('rename_filed1');
			var oRegname_filed2=document.getElementById('rename_filed2');
			var oRegname_filed3=document.getElementById('rename_filed3');
			var oRegpass=document.getElementById('regPass');
			var oRegpass_filed1=document.getElementById('regpass_filed1');
			var oRegpass_filed2=document.getElementById('regpass_filed2');
			var oRegpass_filed3=document.getElementById('regpass_filed3');
			var oRegpass_filed4=document.getElementById('regpass_filed4');
			var oRegpass_filed5=document.getElementById('regpass_filed5');
			var oRegpaw=document.getElementById('regpaw');
			var oRegpaw_filed1=document.getElementById('regpaw_filed1');
			var oRegpaw_filed2=document.getElementById('regpaw_filed2');
			var oRegtel=document.getElementById('regTel');
			var oRegtel_filed1=document.getElementById('regtel_filed1');
			var oRegtel_filed2=document.getElementById('regtel_filed2');
			var oRegcode=document.getElementById('Code');
			var oRegcode_filed1=document.getElementById('regcode_filed1');
			var oRegcode_filed2=document.getElementById('regcode_filed2');
			var btn=document.getElementById('ok');
			//用户名验证
			oRegname.onclick=function ()
			{
				oRegname_filed1.style.display="block";
				oRegname_filed2.style.display="none";
				oRegname_filed3.style.display="none";
				oRegpass_filed1.style.display="none";
				oRegpass_filed2.style.display="none";
			};
			oRegname.onblur=function ()
			{
				if (oRegname.value.length>0&&oRegname.value.length<4||oRegname.value.length>20)
				{
					oRegname_filed2.style.display="block";
					oRegname_filed1.style.display="none";
					oRegname_filed3.style.display="none";
					oRegpass_filed4.style.display="none";
					oRegpass_filed5.style.display="none";
					btn.disabled=true; 
				}
				else if(oRegname.value.length==0)
				{
					return true;	
				}
				else
				{
					if(/^\d+$/.test(oRegname.value))
					{
						oRegname_filed3.style.display="block";
						oRegname_filed1.style.display="none";
						oRegname_filed2.style.display="none";
						oRegname_filed3.getElementsByTagName('p').item(0).style.color="red";
						btn.disabled=true;
					}
					else
					btn.disabled=false;;
				}
				
			};
			//输入密码验证
			oRegpass.onclick=function ()
			{
				oRegpass_filed1.style.display="block";
				oRegname_filed1.style.display="none";
				oRegpass_filed2.style.display="none";
				oRegpass_filed3.style.display="none";
				oRegpass_filed4.style.display="none";
				oRegpass_filed5.style.display="none";
			};
			oRegpass.onblur=function ()
			{
				if(oRegpass.value.length>0&&oRegpass.value.length<6||oRegpass.value.length>20)
				{
					oRegpass_filed2.style.display="block";
					oRegpass_filed1.style.display="none";
					oRegpass_filed2.getElementsByTagName('p').item(0).style.color="red";
					btn.disabled=true;
						
				}
				else if(oRegpass.value.length==0)
				{
					return true;	
				}
				else
				{
					btn.disabled=false;
					if(/^\d{6,10}$/.test(oRegpass.value))
					{
						oRegpass_filed3.style.display="block";
						oRegpass_filed1.style.display="none";
						oRegpass_filed3.getElementsByTagName('p').item(0).style.color="red";
						oRegpass_filed4.style.display="none";
							
					}
					else if(/^\d{11,20}$/.test(oRegpass.value))
					{
						oRegpass_filed4.style.display="block";
						oRegpass_filed1.style.display="none";
						oIstatus2.style.display="block";	
					}
					else if(/^[a-zA-Z]{6,10}$/.test(oRegpass.value))
					{
						oRegpass_filed3.style.display="block";
						oRegpass_filed1.style.display="none";
						oRegpass_filed3.getElementsByTagName('p').item(0).style.color="red";	
					}
					else if(/^[a-zA-Z]{11,20}$/.test(oRegpass.value))
					{
						oRegpass_filed4.style.display="block";
						oRegpass_filed1.style.display="none";
						oIstatus2.style.display="block";							
					}
					else
					{
						if(oRegpass.value.length>=6&&oRegpass.value.length<=10)
						{
							oRegpass_filed4.style.display="block";
							oRegpass_filed1.style.display="none";
							oIstatus2.style.display="block";	
						}
						else
						{
							oRegpass_filed5.style.display="block";
							oRegpass_filed1.style.display="none";
							oIstatus2.style.display="block";		
						}	
					}
				}
			};
			//确认密码验证
			oRegpaw.onclick=function ()
			{
				oRegpaw_filed1.style.display="block";
				oRegpaw_filed2.style.display="none";
				oRegpass_filed1.style.display="none";	
			};
			oRegpaw.onblur=function ()
			{
				if(oRegpaw.value != oRegpass.value)
				{
					oRegpaw_filed2.style.display="block";
					oRegpaw_filed1.style.display="none";
					oRegpaw_filed2.getElementsByTagName('p').item(0).style.color="red";
					oIstatus3.style.display="none";
					btn.disabled=true;	
				}
				else if(oRegpaw.value.length==0)
				{
					return true;	
				}
				else
				{
					oRegpaw_filed1.style.display="none";
					oIstatus3.style.display="block";
					if(oRegpass.value.length>0&&oRegpass.value.length<6||oRegpass.value.length>20)
					btn.disabled=true;
					else
					btn.disabled=false;	
				}	
			};
			//手机号码验证
			oRegtel.onclick=function()
			{
				oRegtel_filed1.style.display="block";
				oRegtel_filed2.style.display="none";	
			};
			oRegtel.onblur=function()
			{
				if (!(/^1[3|4|5|7|8]\d{9}$/.test(oRegtel.value)))
				{
					oRegtel_filed2.style.display="block";
					oRegtel_filed1.style.display="none";
					oRegtel_filed2.getElementsByTagName('p').item(0).style.color="red";	
					btn.disabled=true;
				}
				else
				{
					oRegtel_filed1.style.display="none";
					oIstatus4.style.display="block";
					if(oRegpass.value.length>0&&oRegpass.value.length<6||oRegpass.value.length>20)
					btn.disabled=true;
					else
					btn.disabled=false;	
				}	
			};
			//验证码验证
			oRegcode.onclick=function()
			{
				 oRegcode_filed1.style.display="block";		
			};
		};               	
</script>


