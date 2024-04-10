<?php
session_start();
$uname=$_SESSION['uname'];
?>

<html>

	<head>
	
	<style type="text/css" >
	
	th{
	
		padding:2px;
		border-radius:4px;
		//background-image:url('img/pattern.png');
		background-color:red;
		color:white;
		
	}
	
	th img{
		width:25px;
		height:25px;
		border:none;		
		
	}
	a{
		color:white;
		font-weight:bold;
		text-decoration:none;
		font-family:'Trebuchet MS';
		font-size:14px;
	}
	
	a:hover{ color:green; }
	
	</style>
	
	</head>
	
	<body>
	<table width=100% >
	<tr>
	
	<th>
	<img src="img/home.jpg"  /><br/>
	<a href=#>HOME</a>
	</th>
	
	<th>
	<img src="img/profile.jpg"  /><br/>
	<a href=viewprofile.php target=ifr1 >PROFILE</a>
	</th>
	
	
	<th>
	<img src="img/add1.jpg"  /><br/>
	<a href=addnewproject.php target=ifr1 >ADD PROJECT</a>
	</th>
	
	<th>
	<img src="img/view.jpg"  /><br/>
	<a href=viewprojectsguide.php target=ifr1 >VIEW PROJECTS </a>
	</th>
	
	<th>
	<img src="img/logout1.jpg"  /><br/>
	<a href=index.php>LOGOUT</a>
	</th>
	
	</tr>
	
	</table>
	
	<iframe name=ifr1 width=100% height=90% src=defaultguide.php frameborder=0>
	</iframe>
	
	</body>
</html>