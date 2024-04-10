<?php
	
	include_once( 'db.php' );
	
	$sql="select * from guides order by sino";
	
	$res=execute( $sql );

	echo "<table width=50% align=center cellspacing=2 cellpadding=5 border=1><caption><h2>Guides Detials</h2></caption>";
	echo "<tr bgcolor=pink ><th>Sino</th><th>Name</th><th>Qualification</th><th>Contact No</th><th>Dept</th><th>UserName</th></tr>";
	while( $row=$res->fetch_object() )
	{
    echo "<tr><td>$row->sino</td><td> $row->name</td><td> $row->quali</td><td> $row->contno </td><td> $row->dept </td><td> $row->uname </td></tr>";
	}

	echo "</table>";
?>