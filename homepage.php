<html>

<head>

<style type="text/css" >

*{
	padding:0px;
	margin:0px;
}

header{

	background-color:darkblue;
	font-size:4em;
	color:white;
	text-align:center;
	
	width:100%;
	float:left;
	
}

nav{
background-color:slateblue;
float:left;
width:100%;
}

#home{ margin-left:4px;}
nav ul li{
			float:left;
			width:120px;
			background-color:slateblue;
			border-right:1px solid white;
			text-align:center;
			line-height:30px;
			//padding-right:auto;
			list-style-type:none;
			position:relative;
			
			border-radius:1px;
}

nav ul li ul li{  

					float:none; 
					list-style-type:none;
					border-top:1px solid white;
					}
					
nav ul li ul{
				display:none;
				position:absolute;
				top:30px;
}

nav ul li:hover ul{ display:block; }					

#logout{ border-right:none; }
a{
	color:white;
	font-weight:bold;
	font-size:14px;
	text-decoration:none;
	display:block;
}

#content{

				
				clear:both;
				height:85%;
}


html{

background:-webkit-linear-gradient(top,ivory,slateblue);
}
</style>

</head>

<body >

	<header>
	BAPUJI HI-TECH COLLEGE
	</header>
	<nav>
		
		<ul>
		<li id=home><a href=#>HOME</a></li>
		
		<li><a href=#>DEPARTMENT</a>
		
			<ul>
			<li><a href=adddept.php target=ifr1>ADD</a></li>
			<li><a href=viewdept.php target=ifr1 >VIEW</a></li>
			</ul>
		
		
		</li>
		<li><a href=#>GUIDES</a>
		
			<ul>
			<li><a href=guideform.php target=ifr1>ADD</a></li>
			<li><a href=viewguides.php target=ifr1 >VIEW</a></li>
			</ul>
		
		
		</li>
		<li><a href=#>PROJECTS</a>
		
				<ul>
				<li><a href=selectdept.php target=ifr1 >VIEW</a></li>
				</ul>
		
		
		</li>
	
		<li><a href=selectdeptforreport.php target=ifr1 >REPORT</a></li>
		
		<li><a href=#>NOTIFICATIONS</a>
		
			<ul>
			<li><a href=addnotifaction.php target=ifr1>ADD</a></li>
			<li><a href=displaynotifications.php target=ifr1 >VIEW</a></li>
			</ul>
		
		
		</li>
		<li id=logout><a href=index.php>LOGOUT</a></li>
		
		</ul>
		
	</nav>

	<div id=content >
	<iframe name=ifr1 frameborder=0 width=100% height=100%>
	</iframe>
	</div>


</body>
</html>