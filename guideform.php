
<?php

include_once('db.php');
include_once('adminnavbar.php');


$sql="select count(*)+1 as sino from guides";
$res=execute( $sql );
$row=$res->fetch_object();
$sino=$row->sino;


$sql="select * from dept";
$res=execute($sql);
?>


<html>

	<head>
	
	<script src="check.js">
	</script>
	

	<body>
	
	<div class="container bg-info" >
	<h2>Add new guide form</h2>
	
	<form name=f1 action=saveguide.php method=post   enctype="multipart/form-data"   >
	
	<table class="table" >
	
	
	<tr>
	
	<td>Sino</td>
	
	<td>
	<input type=text name=sino required id=sino value=<?php echo $sino ?> placeholder="SINO" />
	</td>
	
	</tr>
	
	<tr>
	<td>Name</td>
	
	<td>
	<input type=text name=name id=name required placeholder="Enter Name"  onkeypress="return isAlpha();" />
	</td>
	
	</tr>
	
	
	<tr>
	
	<td>Qualification</td>
	<td>
	<input type=text name=quali id=quali  required placeholder="Qualification" />
	</td>
	
	</tr>
	
	
	<tr>
	<td>Contact No</td>
	<td>
	<input type=text name=contno id=contno required placeholder="Contact No" maxlength=10  onkeypress="return isDigit();" />
	</td>
	
	</tr>
	

	<tr>
	
	<td>Dept</td>
	
	<td>
	<select name=deptid id=deptid required>
	<?php
	while( $row=$res->fetch_object() )
	{
	echo "<option value=$row->deptid>$row->deptname</option>";
	}
	?>
	
	</select>
	</td>
	
	</tr>
	
	
	<tr>
	
	<td>
	UserName
	</td>
	
	<td>
	<input type=text name=uname id=uname required placeholder="UserName" />
	
	</td>
	</tr>
		
		
	<tr>
	
	<td>
	Password
	</td>
	
	<td>
	<input type=password name=pwd id=pwd  required placeholder="Password" />
	
	</td>
	
	</tr>
	
	
	
	<tr>
	
	<td>
	Security Question
	</td>
	
	<td>
	<select name=sque placeholder="Security Question">
	<option value='What is your Pet Name ?'>What is your Pet Name ?</option>
	<option value='Which is your favt Color ?'>What is your favt Color ?</option>
	<option value='Your favt Dish ?'>Your favt Dish ?</option>
	</select>
	</td>
	</tr>
	
	
	
	<tr>
	<td>
	Answer
	</td>
	
	<td>
	<input type=text name=ans  required placeholder="Your Answer" />
	</td>
	
	</tr>
	
	
	
	<tr>
	
	<td>Upload Image</td>
	<td>
	<input type=file name="imgname"  required="required" placeholder="Upload Photo" />
	</td>
	
	</tr>
	
	
	<tr>
	
	<td colspan=2 align=center>
	
	<input type=submit value="CREATE GUIDE" class="btn btn-danger"  />
	</td>
	
	</tr>
	</table>
	
	
	</form>
	</div>
	
	</body>


</html>