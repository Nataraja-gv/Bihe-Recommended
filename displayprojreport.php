<?php

include_once('db.php');
	include_once('adminnavbar.php');
	

$did=$_REQUEST['deptid'];
$year=$_REQUEST['year'];


$sql="select * from dept where deptid='$did' ";
$res=execute( $sql);
$row=$res->fetch_object();

$deptname=$row->deptname;

$sql="select pid,title,year,deptname,name,pmates,tech,descr,limits,future from projects p,dept d,guides g where( p.deptid='$did' and p.deptid=d.deptid and year=$year and g.uname=p.guide ) order by pid";
$res=execute( $sql );
?>

<html>

<head>
<style>

table.proj
{
	table-layout:fixed-layout;
	//width:450px;
	//border:1px solid gray;
	
	margin-top:10px;
	border-collapse:collapse;
	
}

table.proj td{

	padding:12px;
	border-bottom:1px solid black;
	
	background-color:#D8D8;
	
}

table.proj th{
background-color:lightblue;
padding:10px;
}


</style>

</head>

<body>
<center>
<h3><font color=blue>Projects list of the department - <?php echo $deptname; ?>, for the academic year - <?php echo $year; ?></font>
</h3>
</center>

<table align=center class=proj width=80% >
<tr>
<th>Project id</th><th>Title</th><th>Year</th><th>Department</th><th>Guide</th><th>Project mates</th><th>Technology used</th>
</tr>
<?php
while( $row=$res->fetch_object() )
{
?>

<tr>
<td>
<?php echo $row->pid ?>
</td>
<td>
<?php echo $row->title ?>
</td>
<td>
<?php echo $row->year ?>
</td>

<td>
<?php echo $row->deptname ?>
</td>

<td>
<?php echo $row->name ?>
</td>
<td>
<pre>
<?php echo $row->pmates ?>
</pre>
</td>
	
<td>
<?php echo $row->tech ?>
</td>
</tr>


<?php
}
?>
</table>	
<br/>
<center>
<input type=button style="background:-webkit-linear-gradient(left,black,blue); font-size:15px; font-weight:bold; color:white; outline:none; border-radius:10px; padding:5px;"value="Print" onclick="window.print();" />
</center>
</body>
<html>