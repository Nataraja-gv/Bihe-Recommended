<?php
session_start();
$uname=$_SESSION['uname'];

include_once('db.php');
$sql="select pid,title,deptname from projects p,dept d where( guide='$uname' and p.deptid=d.deptid) ";

$res=execute($sql);
?>

<html>

<head>
<title>Project's Details Form</title>

<style type="text/css" >

th{  border-radius:5px; background-color:lightblue; color:black; font-size:25px; }
td{ border-radius:5px; background-color:gray; color:white; font-size:20px;  }
td:hover{ background-color:orange; }

a{ color:yellow; font-size:20px; }
</style>
</head>

<body>
	
		<table align=center cellpadding=15  cellspacing=2  border=0 >
		<tr><th>Project ID</th><th>Title</th><th colspan=2>Deptname</th>
		<?php
		while( $row=$res->fetch_object() )
		{
		//echo "Project id = $row->pid";
		?>
		
		<tr>
		<td><?php echo $row->pid ?></td>
		<td><?php echo $row->title ?></td>
		<td><?php echo $row->deptname ?> </td>
		<td>
		<a href="viewmoreprojguide.php?pid=<?php echo $row->pid ?>" >More details</a>
		</td>
		
		</tr>
		<?php
		}
		?>
		
		</table>
</body>
</html>
