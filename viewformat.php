<?php
	
	include_once('db.php');
	include_once('adminnavbar.php');
	
	
	$sql="select * from formats";
	
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
<h2>Format details form</h2>

<table class="table"  style="background-color:white;" >
<tr style="background-color:green;color:white;" >
<th>Slno</th><th>Caption</th><th>File name</th><th>Remove</th>
</tr>

<?php
$slno=1;
while( $row=$res->fetch_object() )
{
echo "<tr><td>$slno</td><td>$row->caption</td><td><a href='docs/$row->filename'>View</a></td><td><a href='deleteformat.php?slno=$row->slno'>Delete</a></td></tr>";

$slno++;
}
?>

</table>

</body>
</html>