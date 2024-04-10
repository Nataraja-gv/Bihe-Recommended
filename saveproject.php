<?php

session_start();
$guide=$_SESSION['uname'];
$deptid=$_SESSION['deptid'];

include_once('db.php');


$current_image=$_FILES['imgname']['name'];

$pid=$_REQUEST['pid'];
$title=$_REQUEST['title'];
$year=$_REQUEST['year'];

$year=$_REQUEST['year'];

$pmates=$_REQUEST['pmates'];
$tech=$_REQUEST['tech'];
$descr=$_REQUEST['descr'];
$limits="NIL";
$future=$_REQUEST['future'];

$sql="insert into projects values('$pid','$title',$year,'$deptid','$guide','$pmates','$tech','$descr','$limits','$future','$current_image')";

$res=execute( $sql );

$new_image = $current_image;
				$destination="docs/".$new_image;
				
				//echo "Destination = $destination";
				$action = move_uploaded_file($_FILES["imgname"]["tmp_name"], $destination);

echo "<center><b><font color=blue size=5>Ok Project Has been saved</font><br><br><a href=addnewproject.php><b>Return</b></a></center>";


?>