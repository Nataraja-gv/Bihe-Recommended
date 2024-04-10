	<?php

	include_once( 'db.php');

	$sino=$_REQUEST['sino'];
	$name=$_REQUEST['name'];
	$quali=$_REQUEST['quali'];
	$contno=$_REQUEST['contno'];
	$deptid=$_REQUEST['deptid'];
	$uname=$_REQUEST['uname'];
	$pwd=$_REQUEST['pwd'];
	
	
	$sque=$_REQUEST['sque'];
	$ans=$_REQUEST['ans'];
	//$imgname=$_REQUEST['imgname'];
	$current_image=$_FILES['imgname']['name'];
	
	
	$sql="insert into guides values($sino,'$name','$quali','$contno','$deptid','$uname','$pwd','$sque','$ans','$current_image')";

	$res=execute( $sql );
	

	echo "<br><br><br><center><b><font color=blue size=8>OK Guide Details are Saved</font><br><a href=guideform.php>Back</a></center>";
	
	
	
	
	$extension = substr(strrchr($current_image, '.'), 1);
	if (($extension == "jpg") || ($extension == "jpeg")  || ($extension == "png")) 
	{

	}
	else
	{
	die('Unknown extension');
	}
	$new_image = $current_image;
	$destination="photos/".$new_image;
	$action = copy($_FILES['imgname']['tmp_name'], $destination);
	if (!$action) 
	{
	die('File copy failed');
	}
	
	?>