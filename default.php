	<html>
	
	<head>
	<script src="jquery-1.11.0.js">
	</script>
	
	<script>
	
	$(document).ready(
	
	function(){
	
		$("#t1").keyup(
		
		function(){
		
		if( $("#t1").val()=="")
		{
		return;
		}
		
		$.get(
		
		"getresult.php",
		{
		data:$("#t1").val()
		},
		function( data )
		{
		$("#result").html( data );
		}
		
		);
		
		
		
		}
		
		
		
		);
	
	
	
	
	}
	
	
	
	
	);
	</script>
	
	<style>
	.st1{
	
		margin-left:15px;
		text-decoration:none;
		font-size:15px;
		
	}
	</style>
	
	
	</head>
	
	<body>
	
	<center>
	<input type=text name=t1 id=t1 placeholder="Enter Your Search Query Ex:- java,php or ecops project" style="text-align:center; width:600px; height:40px; color:black; font-size:18px;" /><span class=st1> <a href=index.php?page=search.php>Custom search</a></span>
	</center>
	<div id=result style="width:auto; margin-left:14%; margin-top:8%; height:auto; overflow:auto;" >
	
	</div>
	</body>
	
	</html>