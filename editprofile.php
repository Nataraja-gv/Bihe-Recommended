
<?php
include_once('db.php');

session_start();
$uname=$_SESSION['uname'];

$sql="select * from guides where uname='$uname' ";
$res=execute( $sql );
$row=$res->fetch_object();
$sino=$row->sino;

?>


<html>

	<head>
	
	
	<script src="check.js">
	</script>
	
	<center><h2 class=heading >Edit Guide Details Form</h2></center>
	<link rel="stylesheet" type="text/css" href="formstyle.css" />
	</head>

	<body>
	
	<div id=formdiv >
	<center>
	
	<img align=center src="photos/<?php echo $row->imgname ?>"  width=200px height
	=200px /> 
	
	<a href=uploadimage.php>Change Picture</a>
	
	
	</center>
	
	<br><br>
	<form name=f1 action=updateguide.php method=post   enctype="multipart/form-data"   >
	
	
	<input type=hidden name=sino  id=sino value=<?php echo $sino ?> />
	<br>
	
	<label for=name >Name</label>
	<input type=text name=name id=name required value=<?php echo $row->name ?> />
	<br>
	
	<label for=quali >Qualification</label>
	<input type=text name=quali id=quali  required  value=<?php echo $row->quali ?> />
	<br>
	
	<label for=contno >Contact No</label> 
	<input type=text name=contno id=contno required=required value=<?php echo $row->contno ?>  onkeypress="return isDigit();"  maxlength=10 />
	<br>
	
		
	<label for=pwd >Password</label>
	<input type=password name=pwd id=pwd  required  value=<?php echo $row->pwd ?>  />
	<br>
	
	<input type=submit value="UPDATE GUIDE"  name=submit />
	
	</form>
	</div>
	
	</body>


</html>