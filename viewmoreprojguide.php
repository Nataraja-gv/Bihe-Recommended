<?php

	include_once('db.php');
	$pid=$_REQUEST['pid'];
	
	$sql="select pid,title,year,deptname,name,pmates,tech,descr,limits,future,docname from projects p,dept d,guides g where( p.pid='$pid' and p.deptid=d.deptid and p.guide=g.uname )";
	$res=execute( $sql );
	$row=$res->fetch_object();
	
?>

<html>
	<head>
	<title>Projects Details Form</title>
	
	<style type="text/css" >
	td:first-child{ 
	//border-radius:3px;
	//background-color:purple; 
	//color:white; font-size:20px; 
	
	font-weight:bold;
	font-family:Calibri;
	
	border-bottom:1px solid green;
	}
	
	td:last-child{ 
	border-radius:5px; 
	//background-color:black; 
	//color:white; font-size:22px; 
	
	color:blue ;
	border-bottom:1px solid green;
	}
//td:hover{ background-color:orange; }

	table{
		border:1px solid black;
	}
	</style>
	
	</head>
	
	<body>
	
	<table align=center cellspacing=2 cellpadding=5 width="100%" >
	
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
	<td><pre><?php echo $row->pmates ?></pre></td>
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
	<td>Report</td>
	<td><a href="docs/<?php echo $row->docname ?>">Download Report</a></td>
	</tr>
	
	<tr>
	<td>Future Enhancements</td>
	<td><?php echo $row->future ?></td>
	</tr>
		
	</table>
	<br><br>
	<center>
	<input type=button value="PRINT THIS" onclick="window.print()" />
	
	<br/><br/>
	
	<a href="editproject.php?pid=<?php echo $row->pid ?>">Edit project</a>
	</center>
	</body>
</html>