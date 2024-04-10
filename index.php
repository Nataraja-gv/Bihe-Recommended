<?php

	include_once('navbar.php');

?>





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
	
	<div class="container-fluid justify-left" >
	
	<center>
	<input type=text name=t1 id=t1 placeholder="Enter Your Search Query Ex:- java,php or ecops project" style=" width:450px;border:2px solid black; padding:10px;font-weight:bold;" />&nbsp;<br/>
	
	<a href="search.php" class="btn btn-small btn-danger" >Custom search</a>
	</center>
	<br/>
	<div id=result style="" class="container text-danger" >
	
	<center>
	
	<img src="img/campus.jpg" class="img img-responsive img-thumbnail" />
	
	</center>
	
	</div>





