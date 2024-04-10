
<?php

	include_once('navbar.php');
?>

<head>

	<script src="jquery-1.11.0.js">
	</script>
	
	<script>
	$(document).ready(function(){
	
		$("#searchres").load("returnsearchresult.php",{con:"all"},function(data){
						
		});
		
		
		$("#f1").submit(function(){
		
		var res;
		
		if( $("#searchtype").val()=="year")
		{
		res=" year="+$("#t1").val();
		}
		else
		{
		res=" "+$("#searchtype").val()+" like '%"+$("#t1").val()+"%'";
		}
		
		$("#searchres").load("returnsearchresult.php",{con:res},function(data){
						
		});
		
		
		return(false);
		});
		
		
	
	
	});
	</script>

<style>
table.searchtable{
background-color:gray;
}

table.searchtable td{

text-align:center;
padding:5px;
font-size:15px;
font-weight:bold;

color:yellow;

}

input,select {

width:200px;
height:30px;
padding-left:10px;
font-weight:bold;

}
</style>
</head>

<body>


<form name=f1 id=f1>

<div class="container">

<select name=searchtype id=searchtype>
<option value=year>Year</option>
<option value=title>Title</option>
<option value=tech>Technology</option>
<option value=descr>Description</option>
</select>

&nbsp;&nbsp;

<input type=text name=t1 id=t1 placeholder="Enter search query" required="required" />




</div>
<br/><br/>
<div class="container-fluid">


<input type=submit value=Search id=submit name=submit class="btn btn-success btn-block" />
</div>


</form>

<br/>
<div id=searchres class="container" >
</div>
</body>

