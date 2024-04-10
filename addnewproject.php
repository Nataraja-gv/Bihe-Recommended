<?php
	
	session_start();
	$deptname=$_SESSION['deptname'];

	$cy=date('Y');
	
	
?>

<html>

	<head>
	<link rel="stylesheet" type="text/css" href="style.css" />
	
	
	<script src="jquery-1.11.0.js" >
	</script>
	
	<script>
	
	$(document).ready(
	
			function(){
			
			
				$("#pid").click(
				
				function(){
				
				
				
				var y=$("#year").val();
				
				
				
				$.get(
				
						"getpid.php",
						{year:y},
						function( data )
						{
							var d=$.trim(data);
							$("#pid").val(d);
						
						}
						
				
				);
				
				
				
				
				
				}
				
				
				
				);
			
			
			
			
				$(".f1").submit( function(){
				
					//alert($(".chk").prop("checked"));
					
					if( $(".chk").prop("checked") )
					{
					
					}
					else
					{
						alert("Please accept the condition");
						$(".chk").focus();
						return false;
					}
				
				});
			
			
			
			}
	
	
	
	
	
	
	
	);
	
	</script>
	
	
	<style>
	
		input[type='text'],input[type='number'],textarea{
		
		width:200px;
		
		}
		
		
		input[type='submit']{
	
				
				width:250px;
				height:33px;
				font-size:13px;
				border-radius:10px;
				margin-left:50px;
				color:white;
				background-color:purple;
	}
	</style>
	
	</head>

	<body>
	
	
	
	<form name=f1 action=saveproject.php method=post method="post" enctype="multipart/form-data"  class="f1" >
	
	<table align=center  border=1 cellpadding="10" >
	<tr bgcolor="lightblue" >
	<th>Department</th><th>Year</th><th>Project ID</th><th>Project title</th>
	</tr>
	
	<tr>
	
	<td>
	<input type=text name=deptname required id=deptname value=<?php echo $deptname ?> readonly="readonly"  />
	</td>
	
	
	
	<td>
	<input type=number value=<?php echo $cy ?>  name=year  id=year />
    </td>
	
	
	<td>
	<input type=text name=pid required id=pid readonly="readonly" />
	</td>
	
	<td>
	<input type=text name=title id=title required  />
	</td>
	
	</tr>
	
	
	<tr bgcolor="lightblue">
	<th>Project Mates</th><th>Technologies used</th><th>Project description</th><th>Future enhancements</th>
	</tr>
	
	
	<tr>
	
	<td>
	<textarea rows=5 name=pmates></textarea>
	</td>
	
	<td>
	<textarea name=tech  required=required ></textarea>
	</td>
	
	
	
	<td>
	<textarea rows=5  name=descr></textarea>
	</td>
	
	
	<td>
	<textarea rows=5 name=future></textarea>
	</td>
	
	</tr>
	
	
	<tr>
	<td colspan="4"  align=center >
	<input type="file" for=report  name="imgname" />
	</td>
	
	</tr>
	
	
	
	<tr>
	
	<td colspan=4 align=center  bgcolor="honeydew" >
	<input type="checkbox"  name="chk" class="chk" /> <b>I here by confirm that information uploaded above is correct and enough care is taken to give valid infromation</b>
	</td>
	
	</tr>
	
	
	<tr>
	
	<td colspan=4 align=center >
	<input type=submit value=" SAVE PROJECT" />
	</td>
	
	</tr>
	
	</table>
	</form>
	
	
	</body>


</html>