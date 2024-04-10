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
	width:450px;
	border:1px solid purple;
	border-radius:10px;
	margin-top:20px;
	border-collapse:collapse;
	
}

table.proj td{

	padding:12px;
	border-bottom:1px solid black;
	
	background-color:#D8D8;
	
}

table.proj td:first-child{

	font-weight:bold;
	color:black;
}



table.proj td{

	color:green;
}

</style>

</head>

<body>
<center>
<h3><font color=blue>Project details of the department - <?php echo $deptname; ?>, for the academic year - <?php echo $year; ?></font>
</h3>
</center>
<?php
while( $row=$res->fetch_object() )
{
	
?>

<table align=center class=proj>

<tr>
<td>
Project id
</td>
<td>
<?php echo $row->pid ?>
</td>
</tr>

<tr>
<td>
Title
</td>
<td>
<?php echo $row->title ?>
</td>
</tr>
	
<tr>
<td>
Year
</td>
<td>
<?php echo $row->year ?>
</td>
</tr>
	
<tr>
<td>
Dept
</td>
<td>
<?php echo $row->deptname ?>
</td>
</tr>
	
<tr>
<td>
Guide
</td>
<td>
<?php echo $row->name ?>
</td>
</tr>
	
<tr>
<td>
Project mates
</td>
<td>
<?php echo $row->pmates ?>
</td>
</tr>
	
<tr>
<td>
Technology used
</td>
<td>
<?php echo $row->tech ?>
</td>
</tr>

<tr>
<td>
Description
</td>
<td>
<?php echo $row->descr ?>
</td>
</tr>
	
<tr>
<td>
Limitations
</td>
<td>
<?php echo $row->limits ?>
</td>
</tr>
	
<tr>
<td class=st1>
Futrue enhancements
</td>
<td>
<?php echo $row->future ?>
</td>
</tr>
</table>

<?php
}
?>
	
<br/>
<center>
<input type=button value="PRINT" onclick="window.print();" />
</center>
</body>
<html>