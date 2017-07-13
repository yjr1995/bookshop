<?php error_reporting(0);?>
<?php 
	//菜单导航
	include("PHP/LinkMysql.php");
	function meun ($num1,$num2)
	{
		$sql1="select * from classtwo";
		$result1=mysql_query($sql1);
		$row1=0;
		while($array1=mysql_fetch_array($result1))
		{
			$content1[$row1]=$array1;
			$row1++;	
		}	
		for($j=$num1;$j<$num2;$j++)
		{
?>
			<span><?php echo $content1[$j-1]['classtwoname'];?></span>
			<li>
<?php
			$sql2="select * from classthree where classtwoId=".$j."";
			$result2=mysql_query($sql2);
			$row=0;
			while($array2=mysql_fetch_array($result2))
			{
				$content2[$row]=$array2;
				$row++;	
			}
				$cou=count($content2);
				for($i=0;$i<$cou;$i++)
				{
					$meun=$content2[$i]['classthreename'];
					echo"<a href='BrowsingContent.php?id=".$content2[$i]['classthreeId']."'>".$meun."</a>";
					if($i!=0&&$i%4==0)
					echo"<br>";	
				}     
?> 
			</li>
<?php 
		}
	};
	//菜单栏目
	function column($num1)
	{
		//$id=$_GET['id'];
		$sql="select * from classthree where classtwoId=".$num1;
		$result=mysql_query($sql);
		$row=0;
		while($array=mysql_fetch_array($result))
		{
			$content[$row]=$array;
			$row++;		
		}
		for($i=0;$i<count($content);$i++)
			{
				echo"<li><a href='BrowsingContent.php?id='>".$content[$i]["classthreename"]."</a>";
				echo"</li>";	
			}	
	};
	function message()
	{
		$sql="select * from message order by id desc";
		$result=mysql_query($sql);
		$row=0;
		while($array=mysql_fetch_array($result))
		{
			$content[$row]=$array;
			$row++;		
		}
		for($i=0;$i<count($content);$i++)
		{
			$con=$content[$i]["content"];
			$cou=strlen($con);
			if($cou>70)
			{
			$con1=mb_substr($con,0,10,"utf-8")."...";
			}
			else 
			$con1=$con;
			echo"<li><a href='#'>".$con1."</a>";
			echo"</li>";	
		}	
	};
?>
