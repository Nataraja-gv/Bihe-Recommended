<?php

	include_once('navbar.php');
	
	include_once('db.php');
	$pid=$_REQUEST['pid'];
	
	$sql="select pid,title,year,deptname,name,pmates,tech,descr,limits,future from projects p,dept d,guides g where( p.pid='$pid' and p.deptid=d.deptid and p.guide=g.uname )";
	$res=execute( $sql );
	$row=$res->fetch_object();
	
?>


	<head>
	<style type="text/css" >
	td:first-child{color:blue;font-weight:regular; font-family:Calibri; }
	
	//td:last-child{ border-radius:5px; background-color:black; color:white; font-size:22px;  }
//td:hover{ background-color:orange; }
	</style>
	
	</head>
	
	<body>
	
	<table class="table table-condensed table-bordered" >
	
	<tr>
	<td>Project ID</td>
	<td><?php echo $row->pid ?></td>
	</tr>
	
	<tr>
	<td>Project Title</td>
	<td><?php echo $row->title ?></td>
	</tr>
	
	<tr>
	<td>Year</td>
	<td><?php echo $row->year ?></td>
	</tr>
	
	
	<tr>
	<td>Department</td>
	<td><?php echo $row->deptname ?></td>
	</tr>
	
	<tr>
	<td>Guide</td>
	<td><?php echo $row->name ?></td>
	</tr>
	
	<tr>
	<td>Project Mates</td>
	<td><?php echo $row->pmates ?></td>
	</tr>
	
	<tr>
	<td>Technology</td>
	<td><?php echo $row->tech ?></td>
	</tr>
	
	<tr>
	<td>Description</td>
	<td><?php echo $row->descr ?></td>
	</tr>
	
	<tr>
	<td>Limitations</td>
	<td><?php echo $row->limits ?></td>
	</tr>
	
	<tr>
	<td>Future Enhancements</td>
	<td><?php echo $row->future ?></td>
	</tr>
		
	</table>
	<br><br>
	<center>
	</center>
	</body>
</html>