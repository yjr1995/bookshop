// JavaScript Document
function GetXmlHttpObject()
{
	var XMLHttp=false;
	try
	{
		XMLHttp=new XMLHttpRequest();	
	}
	catch(e)
	{
		try
		{
			XMLHttp=new ActiveXObject("Msxml2.XMLHTTP");	
		}
		catch(e2)
		{
			XMLHttp=new ActiveXObject("MIcrosoft.MXLHTTP");	
		}	
	}
	return XMLHttp;	
};
function CallServer()
{
	XMLHttp=GetXmlHttpObject();
	var userID=document.getElementById("regName").value;
    if (userID!="")
    {	
		var url ="PHP/Request.php?regName="+userID;
		var name=document.getElementById('span');
		XMLHttp.open("GET",url,true);
		XMLHttp.send(null);
		XMLHttp.onreadystatechange=function()
		{
			if(XMLHttp.readyState==4&&XMLHttp.status==200)
   			{
        		name.innerHTML=XMLHttp.responseText;
    		}
		};
    }
	else
	{
    	alert("请您填写用户名！");
    }
	
};
function detection(tianjia)
{
	if(tianjia.regName.value=="")	
	{
		alert("请输入您的用户名");
		tianjia.regName.focus();
		return(false);
	}
	if(document.getElementById('span').innerHTML=='已存在')
	{
		alert("该用户已存在!");
		tianjia.regName.focus();
		return(false);
	}
	if(tianjia.regPass.value=="")	
	{
		alert("请输入密码");
		tianjia.regPass.focus();
		return(false);
	}
	if(tianjia.regpaw.value=="")	
	{
		alert("请确认输入您的密码");
		tianjia.regpaw.focus();
   	    return(false);
	}
	if(tianjia.regPass.value != tianjia.regpaw.value)
	{
		alert("密码不相符，请重填");
		tianjia.regpaw.focus();
		return(false);
	}
	if(tianjia.regTel.value=="")	
	{
		alert("请确认输入您的手机号");
		tianjia.regTel.focus();
   	    return(false);
	}
	return (true);	
};
