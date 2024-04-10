<?php
session_start();
$did=$_SESSION['deptid'];
$deptname=$_SESSION['deptname'];

$year=$_REQUEST['year'];


include_once('db.php');

$sql="select deptname,count(*)+1 as sino  from projects p,dept d where( d.deptid='$did' and year=$year and p.deptid=d.deptid)";

$res=execute($sql);

$row=$res->fetch_object();

$v=$deptname."-".$year."-".$row->sino;

echo $v;

?>