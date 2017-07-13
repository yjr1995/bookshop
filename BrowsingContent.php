<?php error_reporting(0);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="Style/BrowsingContent.css" />
</head>
<body>
	<?php include("header.php");?>
    	<div class="BScontent">
        	<div class="BScontent_top">
            	<ul>
                	<li><a href="javascript:">综合排序</a></li>
                    <li><a href="javascript:">人气</a></li>
                    <li><a href="javascript:">价格</a></li>
                    <li><a href="javascript:">出版时间</a></li>
                </ul>
            </div>
            <div class="BScontent_con">       	
                <ul>
                <?php 
					include("PHP/LinkMysql.php");
					$Id=$_GET['id'];
					$sql="select * from merchandisc where classthreeId=".$Id;
					$query=mysql_query($sql);
					$row=0;
					while($array=mysql_fetch_array($query))
					{
							$content[$row]=$array;
							$row++;
					}
					for($i=0;$i<count($content);$i++)
					{
						$con1=$content[$i]["MerName"];
						$con2=$content[$i]["Writer"];
						$con3=$content[$i]["Price"];
						$con4=$content[$i]["SPrice"];
						$con5=$content[$i]["Press"];
						$con6=$content[$i]["Pricture"];
						echo "<li><a href=\"#\">";
						echo "<div class=\"BScontent_con_ul\">";
						echo "<img src='".$con6."'/><div class=\"BScontent_con_ul_div\">";
						echo "<p>书名：".$con1."</p><p>作者：".$con2."</p>";
						echo "<p>出版社：".$con5."</p>";
						echo "<p>&yen;".$con4." 元 <span><s>&yen;".$con3."元</s></span></p>";  
						echo "</div></div></a></li>";                           
					}	
               ?>
                </ul>               
            </div>
        </div>
    <?php include("footer.php");?>
</body>
</html>