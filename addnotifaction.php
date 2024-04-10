<?php
	
	include_once('db.php');
	
	include_once('adminnavbar.php');
	
	if( isset($_REQUEST['submit'] ) )
	{

		$sql=insert('notifications',$_REQUEST );
		$res=execute($sql);

		echo "<center><font color=blue size=6>Saved successfully </font><br/><br/><br/><b><a href=?>Return</a></center>";

		exit();

		
	}
	else
	{
		
		$sql="select count(*)+1 as sino,curdate() as ndate from notifications";
		$res=execute($sql);
		$row=$res->fetch_object();
		$sino=$row->sino;
		$ndate=$row->ndate;
			
	}
	
		

	?>


<html>

<head>

<script src="check.js">
</script>


<style>

input,textarea,select{

	width:200px;
	height:33px;
}
</style>


</head>

<body>

<div class="container bg-info text-danger" >
<form name="f1" action="?" method="post">

<table align=center class="table"  >
<caption><b><font color=blue><h2>Add notifications form</font></h2></b></caption>

<tr>
<td>Sino</td>
<td>
<input type="text" value=<?php echo $sino?> readonly name="sino" id="sino" />
</td>
</tr>

<tr>
<td>Department</td>
<td>

<select name=deptid id=deptid>
<option value=#>-- Choose department --</option>
<?php
$sql="select * from dept";
$res=execute( $sql);
while( $row=$res->fetch_object())
{
echo "<option value=$row->deptid >$row->deptname</option>";
}
?>

</select>
</td>
</tr>

<tr>
<td>Description</td>
<td>
<textarea required name=descr id=descr required ></textarea>
</td>
</tr>
<input type=hidden name=ndate value=<?php echo $ndate ?> />
<tr>
<td colspan=2 align=center>
<input type="submit" name="submit" id="submit" value="  Save  " class="btn btn-danger"  />
</td>
</tr>

</table>

</form>

</div>
</body>
</html>

