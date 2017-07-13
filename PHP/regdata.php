<?php
	session_start();
	$code=strtolower($_POST['Code']);
	if($code!=strtolower($_SESSION['string']))
	{
		echo"<script>alert('验证码不正确！请重新输入')</script>";
?>
	<script>javascript:history.go(-1);</script>	
<?php
	}
	else
	{
		include("LinkMysql.php");
		include("DataClass.php");
		if($_POST['submit'])
		{
			$regName=trim($_POST['regName']);
			$regPass=trim($_POST['regPass']);
			$regpaw=trim($_POST['regpaw']);
			$regTel=trim($_POST['regTel']);
			$prov=trim($_POST['cmbProvince']);
			$city = trim($_POST['cmbCity']);
			$dist = trim($_POST['cmbArea']);
			$address=$prov.$city.$dist;
			$key=array('Id','LoginName','LoginPwd','Sex','Brith','Phone','Address','Zip','Email',        'Regdate','Lastdate','Logintime','Memberlevel','head');
			$value=array('',$regName,$regPass,'','',$regTel,$address,'','','','','','','');
			$insertdata=insert("member",$key,$value);
			
			if($insertdata)
			{
				include("Loading.php");	
			}
		}	
	}	 
?>