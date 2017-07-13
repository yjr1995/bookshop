<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
    <link type="text/css" rel="stylesheet" href="../Style/indexcontent.css"/>
    <?php include("meun.php");?>
</head>
<body>
	<script src="../js/Common-Page.js" type="text/javascript"></script>	
	<?php include("header02.php");?>
    <div id="content">
    	<div class="content_left">
        	<div id="conleft_ul">
            	<ul>
            	<?php
                	include("../PHP/LinkMysql.php");
					$sql="select * from classone";
					$result=mysql_query($sql);
					$row=0;
					while($array=mysql_fetch_array($result))
					{
						$content[$row]=$array;
						$row++;	
					}
					$cou=count($content);
					for($i=0;$i<$cou;$i++)
					{
						echo "<li>".$content[$i]["classonename"]."</li>";
						$sql2="select * from classtwo where classoneId=".($i+1)."";
						$result2=mysql_query($sql2);
						$row2=0;
						unset($content2);
						while($array2=mysql_fetch_array($result2))
						{
							$content2[$row2]=$array2;
							$row2++;
						}
						echo"<li>";
						for($j=0;$j<count($content2);$j++)
						{
							$con=$content2[$j]["classtwoname"];
							echo"<a href=\"../CommonBrowsing.php?id=".$content2[$j]["classtwoId"]."\">".$con."&nbsp;</a>";
							if($j!=0&&$j%2==0)
							{
								echo"</li>";
								echo"<li>";	
							}
						}	
					}
				?>  
            	</ul>
            </div>
        </div>
        <div class="content_mid">
       		<div id="content_mid_top">
            	<ul>
                	<li><a href="#"><img src="../images/index1.jpg"/></a></li>
                    <li><a href="#"><img src="../images/index2.jpg" /></a></li>
                    <li><a href="#"><img src="../images/index3.jpg" /></a></li>
                    <li><a href="#"><img src="../images/index4.jpg" /></a></li>
                </ul>
            </div>
            <div class="content_mid_bot">
            	<ul>
                	<li><a href="#"><img src="../images/index5.jpg" /></a></li>
                    <li><a href="#"><img src="../images/index6.jpg" /></a></li>
                </ul>
            </div>
                <div id="conter_filed1">
                	<ul class="meun_table">
                    	<?php meun(1,4);?>
                	</ul>
            	</div>
            <div id="conter_filed2">
                <ul class="meun_table">
                    <?php meun(4,6);?>
                </ul>
            </div>
            <div id="conter_filed3">
                <ul class="meun_table">
                    <?php meun(6,8);?>
                </ul>
            </div>
            <div id="conter_filed4">
                <ul class="meun_table">
                    <?php meun(8,11);?>
                </ul>
            </div>
            <div id="conter_filed5">
                <ul class="meun_table">
                    <?php meun(11,13);?>
                </ul>
            </div>
            <div id="conter_filed6">
                <ul class="meun_table">
                    <?php meun(13,14);?>
                </ul>
            </div>
            <div id="conter_filed7">
                <ul class="meun_table">
                    <?php meun(14,17);?>
                </ul>
            </div>
            <div id="conter_filed8">
                <ul class="meun_table">
                    <?php meun(17,19);?>
                </ul>
            </div>
            <div id="conter_filed9">
                <ul class="meun_table">
                    <?php meun(19,22);?>
                </ul>
            </div>
            <div id="conter_filed10">
                <ul class="meun_table">
                    <?php meun(22,24);?>
                </ul>
            </div>
            <div id="conter_filed11">
                <ul class="meun_table">
                    <?php meun(24,26);?>
                </ul>
            </div>
        </div>      
        <div class="content_right">
        	<div class="content_rig_top">
                <img src="../image/1.gif" />
                <br />
                <div class="content_rig_top_p">
                	Hi,<?php echo $_SESSION['username'];?><br /><br />
                    &nbsp;&nbsp;<a href="javascript:window.opener=null;window.close()">退出</a>
                </div>      
            </div>
            <div class="content_rig_mid">
            	<div id="choose1">
                	<input type="button" value="促销"  class="active"/>
    				<input type="button" value="公告" />
                    &nbsp;&nbsp;&nbsp;&nbsp;
    				<a href="$"> 更多</a>
                    <div style="display:block;">
                    &nbsp;&nbsp;BT正在开展促销，书籍买一送一，多买多赠。选好专题内的图书放入购物车时，将赠品区中选择相对应数
                    量的赠品一起放入购物车，输入促销码：E6AYIWTQ，结算时系统会将减去赠品的图书价格，即作为免费赠送的商品。赠品区
                    有四十多款，如果赠品区中有看中的书，这个活动就非常合适了，活动链接在此，时间截止到：2017年9月30日23:59:59。
                    感谢“乌鸦”的爆料。
                    </div>
                    <div>
                    &nbsp;&nbsp;各部室、公司及社区： 
                    管委会兴建的党员群众服务中心，按照上级有关部门的要求和规定，现已全面竣工，即将投入使用。为了认真、切实抓好党
                    建工作，搞好“创先争优”活动，将各项工作落到实处，使党员群众服务中心有内容、有看点、有实物。我们号召各部室、公	
                    司及社区的全体党员、干部同志们积极行动起来，为**的党员群众服务中心图书阅览室募捐如下书籍：  
                    一、马列主义、毛泽东思想、邓小平理论、江泽民三个代表和胡锦涛科学发展观等政治书籍。 
                    二、中国共产党成立以来各类政治书籍。 
                    三、改革开放以来，中共中央、国务院、省、市各级党组织、政府及党政各级部门、科研单位出版的各类政治、党务、科学等方面的各类书籍。 
					四、党和政府改革开放以来的各类报刊、杂志。 
					五、各类科教、科普、致富、养殖等书籍。 
					希望广大党员、干部按照上述内容踊跃捐赠。我们的党员、干部同志们应积极带头。原则上每人 5 册（本、套）以上，多										   					捐不限。捐赠时间从即日起至 9 月 18 日 止。捐赠完成后，我们将把每位捐赠的书籍归类、编号、整理后注入捐赠者单位						 					和姓名，供大家在党员群众服务中心阅读和学习。同时，我们还将捐赠书籍的同志们的名单按照数量多少排序进行公示、表彰。
                    </div>
                </div>
            </div>
            <div class="content_rig_bot">
            	<div id="choose2">
                	<input type="button" value="小说"  class="active"/>
    				<input type="button" value="传记" />
    				<input type="button" value="生活" />
                    <input type="button" value="计算机" />
                    <div style="display:block;">
                    	<ul>
                        	<li><a href="#">《武道至尊》</a></li>
                            <li>/</li>
                            <li><a href="#">《凡人修仙传》</a></li>
                            <li><a href="#">《完美世界》</a></li>
                            <li>/</li>
                            <li><a href="#">《地牢密码》</a></li>
                            <li><a href="#">《霍比特人》</a></li>
                            <li>/</li>
                            <li><a href="#">《魔兽世界》</a></li>
                            <li><a href="#">《混沌之戒》</a></li>
                            <li>/</li>
                            <li><a href="#">《斗罗大陆》</a></li>
                        </ul>
                    </div>
                    <div>
                    	<ul>
                        	<li><a href="#"><img src="../images/biography1.jpg" /></a></li>
                            <li><a href="#"><img src="../images/biography2.jpg" /></a></li>
                        </ul>
                    	<p></p>
                    </div>
                    <div>
                    	<a href="#"><img src="../images/index2.jpg"/></a>
                        <a href="#"><img src="../images/index4.jpg"/></a>
                    </div>
                    <div>
                    		<a href="#"><img src="../images/pelli book1.jpg" /></a>
                        	 出版社：中国铁道出版社
                             页&nbsp;&nbsp;&nbsp;码：226<br/>
                             页定价：&yen；34.00
                    </div>
                </div>
            </div>
        </div>
        <div class="content_centre">
        
        </div>
    </div>
    <?php include("footer02.php");?>
</body>
</html>
	<!--无缝滚动 -->
    <script>
		window.onload=function ()
		{
			var oDiv=document.getElementById('content_mid_top');
			var oUl=oDiv.getElementsByTagName('ul')[0];
			var aLi=oUl.getElementsByTagName('li');
			roll(oDiv,oUl,aLi,-805,2000);
		};
					
    </script>
    <!--选项卡-->
    <script>
    	var oDiv=document.getElementById('choose1');
		var aBut=oDiv.getElementsByTagName('input');
		var aDiv=oDiv.getElementsByTagName('div');
		Control(aBut,aDiv);
    </script>
    <script>
    	var oDiv2=document.getElementById('choose2');
		var aBut2=oDiv2.getElementsByTagName('input');
		var aDiv2=oDiv2.getElementsByTagName('div');
		Control(aBut2,aDiv2);
    </script>
    <!--导航栏-->
    <script>
    	var oUl=document.getElementById('conleft_ul');
		var aLi=oUl.getElementsByTagName('li');
		var aDiv1=document.getElementById('conter_filed1');
		var aDiv2=document.getElementById('conter_filed2');
		var aDiv3=document.getElementById('conter_filed3');
		var aDiv4=document.getElementById('conter_filed4');
		var aDiv5=document.getElementById('conter_filed5');
		var aDiv6=document.getElementById('conter_filed6');
		var aDiv7=document.getElementById('conter_filed7');
		var aDiv8=document.getElementById('conter_filed8');
		var aDiv9=document.getElementById('conter_filed9');
		var aDiv10=document.getElementById('conter_filed10');
		var aDiv11=document.getElementById('conter_filed11');
		common(aLi[1],aDiv1);
		common(aLi[2],aDiv2);
		common(aLi[3],aDiv3);
		common(aLi[6],aDiv4);
		common(aLi[7],aDiv5);
		common(aLi[8],aDiv6);
		common(aLi[10],aDiv7);
		common(aLi[11],aDiv8);
		common(aLi[14],aDiv9);
		common(aLi[15],aDiv10);
		common(aLi[16],aDiv11);
    </script>