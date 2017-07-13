<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<link type="text/css" rel="stylesheet" href="Style/CommonBrowsing.css"/>
<?php include("PHP/meun.php");?>
<body>
<script src="js/Common-Page.js" type="text/javascript"></script>	
	<?php
	session_start();
	if($_GET['username'])
	{
		include("member/header02.php");	
	} 
	else
	{
		include("header.php");	
	}
	include("PHP/LinkMysql.php");
	$classtwoid=$_GET['id'];
	?>
    <div class="content">
    	<div class="content_left">
        	<ul>
            <?php 
				$sql="select * from classtwo where classtwoId=".$classtwoid;
				$result=mysql_query($sql);
				$row=mysql_fetch_array($result);
				$con=$row["classtwoname"];
			?>
            	<li><a href=""><?php echo $con;?></a></li>
               <?php column($classtwoid);?>
            </ul>
        </div>
        <div id="content_mid">
        	<ul>
            	<li><a href="#"><img src="images/youth1.jpg" /></a></li>
                <li><a href="#"><img src="images/youth2.jpg" /></a></li>
                <li><a href="#"><img src="images/youth3.jpg" /></a></li>
                <li><a href="#"><img src="images/youth4.jpg" /></a></li>
            </ul>    
        </div>
        <div class="content_right">
        	<div class="content_right_top">
            	<span>信息栏</span>
            </div>
            <div class="content_right_bot">
            	<ul>
                	<?php message();?>
                </ul>
            </div>
        </div>
        <div class="content_conter">
        	<ul>
            	<li><a href="#"><img src="images/18.jpg" /></a></li>
                <li><a href="#"><img src="images/19.jpg" /></a></li>
                <li><a href="#"><img src="images/20.jpg" /></a></li>
                <li><a href="#"><img src="images/21.jpg" /></a></li>
                <li><a href="#"><img src="images/22.jpg" /></a></li>
            </ul>
    	</div>    
    </div>
    <?php 
		function book()
		{
			$sql= "select * from merchandisc";
			$result=mysql_query($sql);
			$row=0;
			while($array=mysql_fetch_array($result))
			{
				$content[$row]=$array;
				$row++;		
			}
			for($i=0;$i<count($content);$i++)
			{
				$con1=$content[$i]["Pricture"];
				$con2=$content[$i]["MerName"];
				$con3=$content[$i]["Writer"];
				echo "<li><a href='#'>";
				echo "<div class='content_bot_ul_div'> ";
				echo "<img src='".$con1."' class='content_bot_ul_li_con1' />";
				echo "<div class='content_bot_ul_li_con'>";
                echo "<p>".$con2."</p><p>作者&nbsp;&nbsp;".$con3."</p>";
                echo "</div></div></a></li>";               	
			}	
		};
	?>
    <div class="content_bottom">
    	<div class="content_bot_top">
        	<div class="content_bot_top_l">
            	推荐内容
            </div>
            <div class="content_bot_top_r">
            	<button class="content_bot_top_r1" id="btn1"></button>
                <button class="content_bot_top_r2" id="btn2"></button>
            </div>
        </div>		
        <div class="content_bot_con1" id="book">
        	<ul>            	
                <?php book();?>             
            </ul>
        </div>
        <div class="content_bot_mid">
        	书香门第
        </div>
        <div class="content_bot_con2">
        	<ul>            	
                <?php book();?>             
            </ul>
        </div>
    </div>
    <?php include("footer.php");?>
</body>
</html>
	<script>
		window.onload=function ()
		{
			var oDiv=document.getElementById('content_mid');
			var oUl=oDiv.getElementsByTagName('ul')[0];
			var aLi=oUl.getElementsByTagName('li');
			roll(oDiv,oUl,aLi,-1000,1000);
			
		};			
    </script>
    <script>
    	var oBook=document.getElementById('book');
		var oUL1=oBook.getElementsByTagName('ul')[0];
		var aLi1=oUL1.getElementsByTagName('li');
		var aBtn1=document.getElementById('btn1');
		var aBtn2=document.getElementById('btn2');
		roll(oBook,oUL1,aLi1,-1300,1000);	
    </script>