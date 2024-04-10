<?php

	include_once('db.php');
	include_once('adminnavbar.php');
	
	
	$did=$_REQUEST['did'];
	$deptname=$_REQUEST['deptname'];
	
	$sql="insert into dept values( '$did','$deptname')";
	
	$res=execute( $sql );
	
	echo "<center><br><br><br><br><b><font color=blue size=5>Ok Department is Saved</font><br><br><a href=adddept.php>Return</a></b></center>";
	



?>