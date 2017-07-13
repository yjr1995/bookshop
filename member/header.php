<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<link rel="stylesheet" type="text/css" href="css/memberheader.css" />
<body>
	<script type="text/javascript" src="../js/Common-Page.js"></script>
	<div class="header">
    	<img src="../images/Logo2.jpg" />
        <div class="header_mid">
        	<div class="header_mid_top">
            	我的BT
            </div>
            <div class="header_mid_bot">
                <a href="../index.php">返回BT首页</a>          	
            </div>
        </div>
        <div class="header_right" id="hidden">
        	<ul>
            	<li><a href="index.php">首页</a></li>
                <li id="li1">账户设置</li>
                <li id="li2">社区</li>
                <li><a href="#">消息</a></li>
                
            </ul>
        </div>
        <div class="header_later_div_hidden1" id="hideen1">
        	<a href="PersonalDataToModify.php">个人信息<a>
            <a href="#">账号绑定<a>
            <a href="#">账号安全<a>
            <a href="#">我的级别<a>
            <a href="#">收货地址<a>
        </div>
        <div class="header_later_div_hidden2" id="hideen2">
            <a href="#">个人主页<a>
            <a href="#">我的活动<a>
            <a href="#">我的圈子<a>
            <a href="#">我的帖子<a>
        </div>
        <div class="header_later">
			<div class="header_later_div">
            	<input type="text"  class="header_later_div_l"/>
                <button class="header_later_div_r">搜索</button>
            </div>
            <div class="header_later_div">
            	<div class="header_later_div_r">
                	<img src="../images/29.jpg" />
                </div>           	
                <div class="header_later_div_l">
                	<a href="#">我的购物车</a>
                </div>
            </div>
        </div>
    </div> 
    <div class="sidebarleft">
        <ul>
            <li>订单中心</li>
            <li><a href="#">我的订单</a></li>
            <li><a href="#">我的收藏</a></li>
            <li><a href="#">我的购物车</a></li>
            <li><a href="#">我的足迹</a></li>
            <li><a href="#">评价管理</a></li>
            <li>设置</li>
            <li><a href="#">个人信息</a></li>
            <li><a href="#">我的地址</a></li>
        </ul>
    </div>
</body>
</html>
<script>	
	var aLi1=document.getElementById('li1');
	var aLi2=document.getElementById('li2');
	var aDiv1=document.getElementById('hideen1');
	var aDiv2=document.getElementById('hideen2');
	common(aLi1,aDiv1);
	common(aLi2,aDiv2);		
</script>