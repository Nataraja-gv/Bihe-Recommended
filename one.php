	

	<?php

	
	$num=$_REQUEST['t1'];


	echo "<table width=50% align=center cellpadding=5 border=1>";
	echo "<caption><h2>Table of $num is..</h2></caption>";
	for($i=1; $i<=10; $i++ )
	{

		$res=$i*$num;

		echo "<tr><td>$num</td> <td>X</td><td>$i</td><td>= </td><td>$res</td></tr>";

	}

	echo "</table>";

	echo "<br><center><a href=tableform.php>BACK</a></center>";

	?>


	