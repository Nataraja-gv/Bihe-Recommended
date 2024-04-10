<?php
include_once('db.php');

$data=$_REQUEST['data'];

$sql="select distinct pid,title,descr,tech,deptname,docname from projects p,dept d where(  p.deptid=d.deptid and (title like '%$data%' or title='$data' or descr like '%$data%' or descr='$data' or tech like '%$data%' or tech='$data') )";
$res=execute( $sql );

while( $row=$res->fetch_object() )
{
echo "<b><a href='projectdet.php?pid=$row->pid' ><h2>$row->title</h2></a></b><br>$row->descr<br><br><i>$row->tech</i><br/><br/>";
}

?>