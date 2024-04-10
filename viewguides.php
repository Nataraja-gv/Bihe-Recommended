<?php

	include_once('db.php');
include_once('adminnavbar.php');
	$sql="select name,uname,imgname,quali,contno,deptname from guides g,dept d where d.deptid=g.deptid";
	$res=execute( $sql );
?>

<html>

<head>
</head>

<body>
	
		<?php
		while( $row=$res->fetch_object() )
		{
		?>
		
		<div class="container bg-info text-danger col-md-4" style="width:300px; margin-left:auto;margin-right:auto;" >
		<table class="table" style="border:1px solid green;" >
		<caption><b><?php echo $row->name ?> 's - Details</b> </caption>
		<tr>
		<td colspan=2 align=center>
		<img src="photos/<?php echo $row->imgname ?>"  width=200px height=200px />
		</td>
		</tr>
		
		<tr>
		<td>Name</td>
		<td><?php echo $row->name?> </td>
		</tr>
		
		<tr>
		<td>Qualification</td>
		<td><?php echo $row->quali?> </td>
		</tr>
			
		<tr>
		<td>Contact No</td>
		<td><?php echo $row->contno?> </td>
		</tr>
			
		<tr>
		<td>Department</td>
		<td><?php echo $row->deptname?> </td>
		</tr>
			
		<tr>
		<td>User name</td>
		<td><?php echo $row->uname?> </td>
		</tr>
		
		<tr>
		
		<td colspan=2 align=center>
		
		<a href="deleteguide.php?uname=<?php echo $row->uname?>"  class="btn btn-danger"  onclick="return confirm('Are you sure ???'); " > Delete guide</a>
		</td>
		</tr>
		
		
		</table>
		</div>
    <?php
	}
	?>
	
		
</body>
</html>