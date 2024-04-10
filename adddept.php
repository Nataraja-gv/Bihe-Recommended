
<?php
	
	include_once('db.php');
	include_once('adminnavbar.php');
	
	$sql="select count(*)+1 as did from dept";
	$res=execute( $sql );
	
	$row=$res->fetch_object();
	
	$did="D-".$row->did;


?>

<html>

	<head>
	
	<style type="text/css" >
	
	
	
	
	</style>
	</head>

	<body>
	
	<br/><br/>
	
	<div class="container bg-info" >
	<center><h3>Add new department form</h3></center>
	<form name=f1 action=savedept.php method=post >
	
	<table class="table" >
	<tr>
	<td>
	Dept ID
	</td>
	
	<td>
	<input type=text name=did required id=did  value=<?php echo $did ?> readonly=readonly />
	</td>
	
	</tr>
	
	<tr>
	<td>Department Name</td>
	
	<td>
	<input type=text name=deptname id=deptname required  />
	</td>
	
	</tr>
	
	<tr>
	<td colspan=2 align=center >
	
	<input type=submit value=" SAVE " class="btn btn-danger"  />
	</td>
	
	</tr>
	
	</table>
	</form>
	</div>
	
	</body>


</html>