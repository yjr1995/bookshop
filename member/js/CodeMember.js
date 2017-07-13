// JavaScript Document
function detection(xiugai)
{
	if(xiugai.tel.value=="")	
	{
		alert("请确认输入您的手机号");
		xiugai.tel.focus();
   	    return(false);
	}
	if(!(/^13[0-9]{1}[0-9]{8}$|15[0189]{1}[0-9]{8}$|189[0-9]{8}$/.test(xiugai.tel.value)))	
	{
		alert("手机号格式不正确");
		xiugai.tel.focus();
   	    return(false);
	}
	if(xiugai.zip.value=="")	
	{
		alert("请输入您的邮政编码");
		xiugai.zip.focus();
   	    return(false);
	}
	if(!(/^\d{6}$/.test(xiugai.zip.value)))
	{
		alert("邮政编码格式不正确");
		xiugai.zip.focus();
   	    return(false);	
	}
	if(xiugai.email.value=="")	
	{
		alert("请输入您的电子邮箱");
		xiugai.email.focus();
   	    return(false);
	}
	 var myreg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
	if(!(myreg.test(xiugai.email.value)))	
	{
		alert("电子邮箱格式不正确");
		xiugai.email.focus();
   	    return(false);
	}
	return (true);	
};