<?php

	session_start();
	$uname=$_SESSION['uname'];
	
	include_once('db.php');
		
	$sql="select name,quali,contno,deptname,uname,imgname from guides g,dept d where (uname='$uname'  and g.deptid=d.deptid ) ";
	$res=execute( $sql );
	$row=$res->fetch_object();
	
	
?>

<html>

<head>

	<style type="text/css" >
	
	td{
		
			width:300px;
			height:40px;
			
			border-radius: 5px;
			
			font-weight:bold;
			color:black;
			font-family:'Trebuchet MS';
			padding-left:20px;
			
	}
	
	
	
	
	
	
	.st2{
		
		color:green;
		font-weight:bold;
		font-size:1.4em;
	
	}
	
	
	
	</style>
</head>

<body  >
	
		<table align=center cellspacing=2  border=0  >
		<caption class=st2><?php echo $row->name ?> 's - Profile </caption>
				
		
		<tr bgcolor=white>
		<td colspan=2 align=center   >
		<img align=center src="photos/<?php echo $row->imgname ?>"  width=200px height
	=200px /> 
		</td>
		</tr>
		
		<tr bgcolor=#CAE1FF >
		<td>Name</td>
		<td><?php echo $row->name?> </td>
		</tr>
		
		<tr bgcolor=#CAE1FF>
		<td>Qualification</td>
		<td><?php echo $row->quali?> </td>
		</tr>
			
		<tr bgcolor=#CAE1FF>
		<td>Contact No</td>
		<td><?php echo $row->contno?> </td>
		</tr>
			
		<tr bgcolor=#CAE1FF>
		<td>Department</td>
		<td><?php echo $row->deptname ?> </td>
		</tr>
			
		<tr bgcolor=#CAE1FF>
		<td>User name</td>
		<td><?php echo $row->uname?> </td>
		</tr>
		
		<tr>
		<td colspan=2 align=center >
		<a href=editprofile.php style="color:green; text-decoration:none; font-size:18px;" >Edit Your Profile</a>
		</td>
		 </tr>
		</table>
			
</body>
</html>