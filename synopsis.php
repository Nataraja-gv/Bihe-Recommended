
	<?php
	include_once('navbar.php');
	
	?>
	
	<?php
	
	include_once('db.php');
	
	
	$sql="select * from formats";
	
	$res=execute( $sql );
	
?>

	<head>
	<title>Format details form</title>
	
	<style type="text/css" >
	td{
	font-weight:bold;
	}
	
	</style>
	
	</head>
	
	<body>
	
	

<body>

<div class="bg-info container " >
<h2>Format details form</h2>

<table class="table"  style="background-color:white;" >
<tr style="background-color:green;color:white;" >
<th>Slno</th><th>Caption</th><th>File name</th
</tr>

<?php
$slno=1;
while( $row=$res->fetch_object() )
{
echo "<tr><td>$slno</td><td>$row->caption</td><td><a href='docs/$row->filename'>View</a></td></tr>";

$slno++;
}
?>

</table>

</body>
</html>
