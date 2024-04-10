<?php

	include_once('db.php');
	include_once('adminnavbar.php');
	
	$slno=$_REQUEST['slno'];
	
	$sql="delete from formats where slno=$slno";
	$res=execute( $sql );
	
	
	
	
	echo "<center><h2>Format got deleted</h2></center>";
	
?>
	
	
	