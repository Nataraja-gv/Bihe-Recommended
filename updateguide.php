<?php

	session_start();
	$uname=$_SESSION['uname'];
	
	include_once('db.php');
	
	$name=$_REQUEST['name'];
	$quali=$_REQUEST['quali'];
	$contno=$_REQUEST['contno'];
	$pwd=$_REQUEST['pwd'];
	
	$sql="update guides set name='$name',quali='$quali',contno='$contno',pwd='$pwd' where uname='$uname' ";
	
	$res=execute( $sql );
	
	echo "<center><font color=blue size=5><b>Ok Updated</b></font><br><br><a href=viewprofile.php><b>BACK</b></a></center>";
	

?>