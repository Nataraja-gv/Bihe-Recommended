<?php
	
	session_start();
	$uname=$_SESSION['uname'];
	
	include_once('db.php');
	
	if( isset( $_REQUEST['submit'] ) )
	{
	
		$current_image=$_FILES['imgname']['name'];
		
		
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
	
		
		$sql="update guides set imgname='$current_image' where uname='$uname' ";
		$res=execute( $sql );
		
		echo "<br><br><br><center><b><font color=blue size=8>Ok Photo has been changed</font><br><a href=viewprofile.php>Back</a></center>";
	
	
	exit();
	}



?>

<html>

<head>

</head>

<body>
<center>
<form name=f1 action=? method=post  enctype="multipart/form-data"  >
<b>Choose Image to be uploaded</b>
<input type=file name=imgname required=required />
&nbsp;&nbsp;

<input type=submit value="Change Picture"  name=submit />
</form>
</center>

</body>

</html>