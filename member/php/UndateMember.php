<?php
	include("../../PHP/LinkMysql.php");
	include("../../PHP/DataClass.php");
	if($_POST['up'])
	{
		$sex=trim($_POST['sex']);
		$year=trim($_POST['YYYY']);
		$month=trim($_POST['MM']);
		$day=trim($_POST['DD']);
		$date=$year.$month.$day;
		$tel=trim($_POST['tel']);
		$prov=trim($_POST['Province']);
		$city = trim($_POST['City']);
		$dist = trim($_POST['Area']);
		$address=$prov.$city.$dist;
		$zip=trim($_POST['zip']);
		$email=trim($_POST['email']);
		$key=array('Sex','Brith','Phone','Address','Zip','Email',);
		$value=array($sex,$date,$tel,$address,$zip,$email);
		$insertdata=update("member",$value,$key);		
		if($insertdata)
		{
			include("Loading.php");	
		}
	}	
?>
