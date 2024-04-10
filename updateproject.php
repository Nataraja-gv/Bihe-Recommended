<?php



include_once('db.php');




$pid=$_REQUEST['pid'];
$title=$_REQUEST['title'];



$pmates=$_REQUEST['pmates'];
$tech=$_REQUEST['tech'];
$descr=$_REQUEST['descr'];
$limits="NIL";
$future=$_REQUEST['future'];

$sql="update projects set title='$title',pmates='$pmates',tech='$tech',descr='$descr',limits='$limits',future='$future' where pid='$pid'";

$res=execute( $sql );


echo "<center><b><font color=blue size=5>Ok Project Has been Edited</font><br><br><a href=viewprojectsguide.php><b>Return</b></a></center>";


?>