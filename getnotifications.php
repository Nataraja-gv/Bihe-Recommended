<?php

$deptid=$_REQUEST['deptid'];

include('db.php');

if( $deptid=="all")
{
$sql="select * from notifications";
$deptname=" All departments";
}

else
{

$sql="select * from dept where deptid='$deptid' ";
$res=execute( $sql );
$row=$res->fetch_object();
$deptname=$row->deptname." Department";

$sql="select * from notifications where deptid='$deptid' ";

}

$res=execute($sql);
echo "<br/><br/>";
echo "";
echo "<b><font color=blue>Notifications of $deptname</u></b><br/><br/>";
while( $row=$res->fetch_object())
{


echo "<img src='img/new.gif'  /><font color=blue>$row->ndate</font>&nbsp;&nbsp$row->message<br/><br/>";

}

echo "</center>";

?>