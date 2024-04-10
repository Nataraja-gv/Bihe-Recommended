<?php
	
		include_once('db.php');
		
		$pid=$_REQUEST['pid'];
		
		$sql="select * from projects where pid='$pid'";
		
		$res=execute( $sql );
		
		$row=$res->fetch_object();
	
?>

<html>

	<head>
	<link rel="stylesheet" type="text/css" href="style.css" />
	
	
	<script src="jquery-1.11.0.js" >
	</script>
	
	<script>
	
	
	</script>
	
	
	<style>
	
		input[type='text'],input[type='number'],textarea,.title{
		
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
	
	
	
	<form name=f1 action="updateproject.php" method=post method="post" enctype="multipart/form-data"  class="f1" >
	
	<table align=center  border=1 cellpadding="10" >
	<tr bgcolor="lightblue" >
	<th>Project ID</th><th>Project title</th><th>Project Mates</th>
	</tr>
	
	<tr>
	
	
	
	
	<td>
	<input type=text name=pid required id=pid readonly="readonly" value=<?php echo $row->pid ?> />
	</td>
	
	<td>
	<textarea class="title" name=title id=title required=required><?php echo "$row->title" ?></textarea>
	</td>
	
	<td>
	<textarea rows=5 name=pmates><?php echo "$row->pmates" ?></textarea>
	</td>
	
	</tr>
	
	
	<tr bgcolor="lightblue">
	<th>Technologies used</th><th>Project description</th><th>Future enhancements</th>
	</tr>
	
	
	<tr>
	
	
	
	<td>
	<textarea name=tech  rows=5 required=required ><?php echo "$row->tech" ?></textarea>
	</td>
	
	
	
	<td>
	<textarea rows=5  name=descr><?php echo "$row->descr" ?></textarea>
	</td>
	
	
	<td  align=center >
	<textarea rows=5 name=future><?php echo "$row->future" ?></textarea>
	</td>
	
	</tr>
	
	
	
	
	
		
	<tr>
	
	<td colspan=3 align=center >
	<input type=submit value=" EDIT PROJECT" />
	</td>
	
	</tr>
	
	</table>
	</form>
	
	
	</body>


</html>