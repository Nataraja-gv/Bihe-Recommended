<?php

	include_once('db.php');
	include_once('adminnavbar.php');
	
	$sql="select * from dept";
	$res=execute($sql);
	
?>

<html>

<head>
<link rel="stylesheet" type="text/css" href="table.css" />
</head>

<body>
	
		<form name=f1 action="displayprojbyyear.php" method=post>
		<table align=center class=signup>
		
		<tr>
		<td>
		Choose Dept
		
		<select name=deptid id=deptid>
		<?php
		while( $row=$res->fetch_object())
		{
		echo "<option value=$row->deptid>$row->deptname</option>";
		}
		?>
		</select>
		</td>
		<td>
		<input type=number value="2014" name=year id=year />
		</td>
		</tr>
		
		<tr>
		<td colspan=2 align=center>
		<input type=submit value="Display" name=submit />
		</td>
		</tr>
		</table>
		</form>
	
		
</body>
</html>