// JavaScript Document 
	
	window.onload=function enterToTab(elem1)
	{
		function (event, input) 
		{  
    		var e = event?event:window.event;  
    		if(e.keyCode == 13) 
			{  
        		var tabindex = input.getAttribute('tabindex');  
        		tabindex++;  
        		for(var i=0;i<elem1.length;i++) 
				{  
            		if (inputs[i].getAttribute('tabindex') == tabindex) 
					{  
                		inputs[i].focus();  
                		break;  
            		}  
        		}  
    		} 	 
		}	
	};  