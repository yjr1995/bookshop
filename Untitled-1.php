<html>  
<head>  
<title>������������������</title>  
<meta http-equiv='Content-Type' content='text/html; charset=gb2312'>  
</head>  
  
<body>  
<form name=form1>  
<select name=YYYY onChange="YYYYMM(this.value)">  
<option value="">��</option>  
</select>  
<select name=MM onChange="MMDD(this.value)">  
<option value="">��</option>  
</select>  
<select name=DD>  
<option value="">��</option>  
</select>  
</form>  
  
<script language="JavaScript">  
window.onload = function(){  
strYYYY = document.form1.YYYY.outerHTML;  
strMM = document.form1.MM.outerHTML;  
strDD = document.form1.DD.outerHTML;  
MonHead = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];  
  
//�ȸ�������������  
var y = new Date().getFullYear();  
var str = strYYYY.substring(0, strYYYY.length - 9);  
for (var i = (y-30); i < (y+30); i++) //�Խ���Ϊ׼��ǰ30�꣬��30��  
{  
str += "<option value='" + i + "'> " + i + "</option>\r\n";  
}  
document.form1.YYYY.outerHTML = str +"</select>";  
  
//���·ݵ�������  
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
writeDay(n); //������������  
document.form1.DD.value = new Date().getDate();  
}  
function YYYYMM(str) //�귢���仯ʱ���ڷ����仯(��Ҫ���ж���ƽ��)  
{  
var MMvalue = document.form1.MM.options[document.form1.MM.selectedIndex].value;  
if (MMvalue == ""){DD.outerHTML = strDD; return;}  
var n = MonHead[MMvalue - 1];  
if (MMvalue ==2 && IsPinYear(str)) n++;  
writeDay(n)  
}  
function MMDD(str) //�·����仯ʱ��������  
{  
var YYYYvalue = document.form1.YYYY.options[document.form1.YYYY.selectedIndex].value;  
if (str == ""){DD.outerHTML = strDD; return;}  
var n = MonHead[str - 1];  
if (str ==2 && IsPinYear(YYYYvalue)) n++;  
writeDay(n)  
}  
function writeDay(n) //������д���ڵ�������  
{  
var s = strDD.substring(0, strDD.length - 9);  
for (var i=1; i<(n+1); i++)  
s += "<option value='" + i + "'> " + i + "</option>\r\n";  
document.form1.DD.outerHTML = s +"</select>";  
}  
function IsPinYear(year)//�ж��Ƿ���ƽ��  
{ return(0 == year%4 && (year%100 !=0 || year%400 == 0))}  
//--></script> 
</body>  
</html>