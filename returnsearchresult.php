<?php
include_once('db.php');

$data=$_REQUEST['con'];

if( $data=="all")
$sql="select * from projects";
else
$sql="select * from projects where $data";

$res=execute( $sql );

while( $row=$res->fetch_object() )
{
echo "<b><a href=projectdet.php?pid=$row->pid ><h4>$row->title</h4></a></b>$row->descr<br><i>$row->tech</i><br/><br/>";
}

?>