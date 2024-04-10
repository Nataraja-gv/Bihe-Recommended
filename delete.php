<?php

$tname=$_REQUEST['tname'];
$sino=$_REQUEST['sino'];
include('db.php');

$sql="delete from $tname where sino=$sino";
$res=execute( $sql );

$sql="update $tname set sino=sino-1 where sino > $sino";
$res=execute( $sql );

$fname="display".$tname.".php";

header('Location:'.$fname);

?>