<?php

	include_once('db.php');
	include_once('adminnavbar.php');
	
	$uname=$_REQUEST['uname'];
	
	$sql="delete from guides where uname='$uname' ";
	$res=execute( $sql );
	
	
	$sql="delete from projects where guide='$uname' ";
	$res=execute( $sql );
	
	echo "<center><h2>Guide and associated projects got deleted</h2></center>";
	
?>
	
	
	