	function isAlpha()
	{

		var k=event.keyCode;
		
		if( (k>=97 && k<=122) || (k>=65 && k<=90) || k==32 )
		{}
		else
		{
		return(false);
		}

	}

	function isDigit()
	{

		var k=event.keyCode;
		
		if( k>=48 && k<=57)
		{}
		else
		{
		return(false);
		}

	}		