<?php error_reporting(0);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<?php
	session_start();
	if($_GET['username'])
	{
?>
		<script>Javascript:location.href="../login.php";</script>
<?php		
	}
?>
</head>
<link rel="stylesheet" type="text/css" href="css/personandatatomodify.css" />
<script type="text/javascript" src="../js/jquery.cityselect.js"></script>
<script type="text/javascript" src="../js/jsAddresss.js"></script>
<script type="text/javascript" src="js/CodeMember.js"></script>
<body>
	<?php include("header.php");?>
    <div class="content">
    	<p class="content_p">个人资料修改</p>
        <hr size="3" color="#f00" />
        <form name="form1" method="post" enctype="multipart/form-data" action="php/UndateMember.php"onsubmit="return detection(this)">
        	<p>
            	用&nbsp;户&nbsp;名：
                <input type="text"  name="name" value="<?php echo $_GET['username'];?>"/>
            </p>
            <p>
            	性&nbsp;&nbsp;&nbsp;&nbsp;别：
                <input type="radio" name="sex"  value="0" class="input_filed1" checked="checked">男
                <input type="radio" name="sex"  value="1" class="input_filed1">女
            </p>
            <p>
            	出生日期：
                <select name="YYYY" class="input_filed2" onChange="YM(this.value)"></select>&nbsp;年
                <select name="MM" class="input_filed2" onChange="MD(this.value)"></select>&nbsp;月
                <select name="DD" class="input_filed2" ></select>&nbsp;日
            </p>
            <p>
            	手机号码：
                <input type="text"  name="tel"/>
            </p>
            <p>
            	地&nbsp;&nbsp;&nbsp;&nbsp;址：
                <select name="Province" class="input_filed2" id="cmbProvince"></select>&nbsp;省
                <select name="City" class="input_filed2" id="cmbCity"></select>&nbsp;市
                <select name="Area" class="input_filed2" id="cmbArea"></select>&nbsp;区
            </p>
            <script type="text/javascript">  
                    addressInit('cmbProvince', 'cmbCity', 'cmbArea');  
            </script>
            <p>
            	邮政编码：
                <input type="text"  name="zip"/>
            </p>
            <p>
            	电子邮箱：
                <input type="text"  name="email"/>
            </p>
            <P>
            	<input type="submit" value="确认修改" class="input_filed3" name="up"/>
                <input type="reset" value="重 置" class="input_filed3"/>            
            </P>
        </form>
    </div>
    <?php include("footer.php");?>
</body>
</html>
<script>
	window.onload = function()
	{  
		strYYYY = document.form1.YYYY.outerHTML;  
		strMM = document.form1.MM.outerHTML;  
		strDD = document.form1.DD.outerHTML;  
		MonHead = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];   
		var y = new Date().getFullYear();  
		var str = strYYYY.substring(0, strYYYY.length - 9);  
		for (var i = (y-30); i < (y+30); i++)  
		{  
		str += "<option value='" + i + "'> " + i + "</option>\r\n";  
		}  
		document.form1.YYYY.outerHTML = str +"</select>";    
		var str = strMM.substring(0, strMM.length - 9);  
		for (var i = 1; i < 13; i++)  
		{  
		str += "<option value='" + i + "'> " + i + "</option>\r\n";  
		}  
		document.form1.MM.outerHTML = str +"</select>";  
  
		document.form1.YYYY.value = y;  
		document.form1.MM.value = new Date().getMonth() + 1;  
		var n = MonHead[new Date().getMonth()];  
		if (new Date().getMonth() ==1 && IsPinYear(YYYYvalue)) n++;  
		writeDay(n);   
		document.form1.DD.value = new Date().getDate();  
		}  
		function YM(str)  
		{  
		var MMvalue = document.form1.MM.options[document.form1.MM.selectedIndex].value;  
		if (MMvalue == ""){DD.outerHTML = strDD; return;}  
		var n = MonHead[MMvalue - 1];  
		if (MMvalue ==2 && IsPinYear(str)) n++;  
		writeDay(n)  
		}  
		function MD(str)  
		{  
		var YYYYvalue = document.form1.YYYY.options[document.form1.YYYY.selectedIndex].value;  
		if (str == ""){DD.outerHTML = strDD; return;}  
		var n = MonHead[str - 1];  
		if (str ==2 && IsPinYear(YYYYvalue)) n++;  
		writeDay(n)  
		}  
		function writeDay(n) 
		{  
		var s = strDD.substring(0, strDD.length - 9);  
		for (var i=1; i<(n+1); i++)  
		s += "<option value='" + i + "'> " + i + "</option>\r\n";  
		document.form1.DD.outerHTML = s +"</select>";  
		}  
		function IsPinYear(year) 
		{ 
		return(0 == year%4 && (year%100 !=0 || year%400 == 0))
		}
</script>