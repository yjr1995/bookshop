// JavaScript Document
//导航栏
function common(elem1,elem2)
	{
			var timer=null;
		elem1.onmouseover=function ()
		{	
		clearTimeout(timer);
		elem2.style.display='block';
		elem1.style.background='#aaa';
		}; 
		elem1.onmouseout=function ()
		{
		timer=setTimeout(function(){
			elem2.style.display='none';
			},200);
		elem1.style.background="";		
		};
		elem2.onmouseover=function()
		{
		clearTimeout(timer);
		};
		elem2.onmouseout=function ()
		{
		timer=setTimeout(function(){
			elem2.style.display='none';
			},60);	
		};			  
	  };
//选项卡
	function Control (elem1,elem2)
	{
		for (var i=0;i<elem1.length;i++)
		{
			elem1[i].onmouseover=function()
			{
				for (var i=0;i<elem1.length;i++)
				{
					elem1[i].index=i;
					elem1[i].className=' ';
					elem2[i].style.display='none';
				}
					this.className='active';
					elem2[this.index].style.display='block';
			};
		}
	}; 
//无缝滚动
function roll(elem1,elem2,elem3,spech,num1)
	{
		elem2.innerHTML=elem2.innerHTML+elem2.innerHTML;
		elem2.style.width=elem3[0].offsetWidth*elem3.length+"px";
		function move()
		{
			clearInterval(timer);
			if(elem2.offsetLeft < (-elem2.offsetWidth)/2)
			{
				elem2.style.left='0';	
			}
			if(elem2.offsetLeft>0)
			{
				elem2.style.left= -(elem2.offsetWidth/2)+'px';	
			}
			elem2.style.left=elem2.offsetLeft+spech+"px";
		}
		var timer=setInterval(move,num1);
		elem1.onmouseover=function ()
		{
			clearInterval(timer);
		};
		elem1.onmouseout=function()
		{
			timer=setInterval(move,num1);	
		};	
	};	
			  