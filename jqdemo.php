<html>
<head>

<script src="jquery-1.11.0.js">
</script>

<script>

$(document).ready(


		function(){
		
			alert('hiiii.....');
			
			$("#b1").click(
			
				function(){
				
				alert("You have clicked the button");
				}
			
			);
			
			
			$("#dept").change(
			
				function(){
				
				alert(" You have selected city :"+$("#dept").val() );
				
				}
			
			);
			
			
		
		}


);

</script>

</head>


<body>

	<input type=button id=b1 value="Click me" />

	<br>
	
	<select id=dept>
	<option value=1>DVG</option>
	<option value=2>HARI</option>
	<option value=3>SHI</option>
	
	</select>
	
	
</body>


</html>