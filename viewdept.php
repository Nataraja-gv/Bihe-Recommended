<?php
	
	include_once('db.php');
	include_once('adminnavbar.php');
	
	
	$sql="select * from dept";
	
	$res=execute( $sql );
	
?>

<html>
<head>

<style type="text/css" >

.st1{

		color:purple;
		text-shadow:6px 4px 4px yellow;
}

</style>

</head>

<body>

<div class="bg-info container " >
<h2>Department details form</h2>

<table class="table"  style="background-color:white;" >
<tr style="background-color:green;color:white;" >
<th>Dept ID</th><th>Department Name</th>
</tr>

<?php
while( $row=$res->fetch_object() )
{
echo "<tr><td>$row->deptid</td><td>$row->deptname</td></tr>";
}
?>

</table>

</body>
</html>