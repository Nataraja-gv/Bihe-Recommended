
<?php

include_once('db.php');
include_once('adminnavbar.php');



	if( isset($_REQUEST['submit'] ) )
	{
			$caption=$_REQUEST['caption'];
			$current_image=$_FILES['imgname']['name'];
			
			$new_image=$current_image;
			
			$destination="docs/".$new_image;
			$action = copy($_FILES['imgname']['tmp_name'], $destination);
			
			$sql="insert into formats(caption,filename) values('$caption','$current_image')";
			
			$res=execute( $sql );
			
			echo "<center><h1>Format got saved</h1></center>";
			exit(0);
		
	}

?>


<html>

	<head>
	
	<script src="check.js">
	</script>
	

	<body>
	
	<div class="container bg-info" >
	<h2>Add new format form</h2>
	
	<form name=f1 action="?"  method=post   enctype="multipart/form-data"   >
	
	<table class="table" >
	
	
	<tr>
	
	<td>Caption</td>
	
	<td>
	<input type="text" name="caption" required=required />
	</td>
	
	</tr>
	
	
	
	
	<tr>
	
	<td>Upload format file</td>
	<td>
	<input type=file name="imgname"  required="required" placeholder="Upload file" />
	</td>
	
	</tr>
	
	
	<tr>
	
	<td colspan=2 align=center>
	
	<input type=submit value=" Save Format " name="submit" class="btn btn-primary"  />
	</td>
	
	</tr>
	</table>
	
	
	</form>
	</div>
	
	</body>


</html>