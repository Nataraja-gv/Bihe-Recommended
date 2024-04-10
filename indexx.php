<html>
	<head>
	
	<style type="text/css">
	
	body{
	
	//background-image:url(img/bg.jpg);
	size:cover;
	}
	
	#header{
	
	background-color:green;
	height:12%;
	text-align:center;
	font-size:3em;
	color:white;
	}
	
	#leftsidebar{
	
	//background-color:honeydew;
	float:left;
	width:15%;
	border-radius:8px;
	margin-left:3%;
	margin-top:3%;
	box-shadow:2px 2px 2px 3px peru;
	padding:4px;
	}
	
	#leftsidebar ul { margin:0px; padding:0px;}
	#leftsidebar ul li{
	
	list-style-type:none;
	border-radius:5px;
	background-color:#333;
	margin-top:15px;
	text-align:center;
	height:32px;
	line-height:32px;
	}
	
	#leftsidebar ul li:hover{ 
	
	background-color:black;
	}
	
	#leftsidebar a{
	
	text-decoration:none;
	color:yellow;
	font-size:12px;
	font-weight:bold;
	display:block;
	}
	
	#content{
	
	//background-color:ivory;
	width:80%;
	border-radius:8px;
	margin-left:1%;
	margin-top:3%;
	height:80%;
	overflow:auto;
	box-shadow:1px 1px green;
	}
	
	#footer{
	
	width:98%;
	height:5%;
	background-color:darkgreen;
	text-align:center;
	font-weight:bold;
	margin-left:auto;
	margin-right:auto;
	border-radius:6px;
	color:white;
	}
	
	.st1{
	color:white;
	font-weight:bold;
	font-family:Calibri;
	font-size:15px;
	}
	</style>
	
	</head>
	<body>
	
	<div id=header>
	<marquee>Project Repository System <span class="st1">Bapuji Hi-tech College</span></marquee>
	</div>
	
	<div id=leftsidebar>
	
		<ul>
		
		<li><a href=?page=login.php>LOGIN</a></li>
		
		<li><a href=?page=default.php>HOME</a></li>	
		
		<li><a href=?page=viewnotifications.php>NOTIFICATIONS</a></li>
		<li><a href=?page=synopsis.php>SYNOPSIS FORMAT</a></li>
		<li><a href=?page=report.php>REPORT FORMAT</a></li>
		</ul>
	
	</div>
	
	<div id=content>
		<?php
			
			if( isset($_REQUEST['page']))
			{
				$page=$_REQUEST['page'];
				include($page);
			}
			else
			{
				include('default.php');
			}
			
		?>
	</div>
	
	<div id=footer>
	&copy; All rights Reserved
	</div>
	</body>
</html>