<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin Panel</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
	
	<script src="js/jquery-3.3.1.min.js" >
	</script>
	
	<script src="js/bootstrap.min.js" >
	</script>
	
	 <style>
	 body{
	 background-color:ivory;
	 
	 
	background-image:url(img/b1.jpg);
	background-size:cover;
	 }
	 </style>
	
	</head>
	
	<body>
	<nav class="navbar navbar-default navbar-inverse ">
  <div class="container-fluid bg-black">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Admin Dashboard</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
		
		<li class="active"><a href="adminhomepage.php">Home <span class="sr-only">(current)</span></a></li>
        
		
		
		
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mange Depts <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="adddept.php">Add new department</a></li>
			<li role="separator" class="divider"></li>
            <li><a href="viewdept.php">View departments</a></li>
            
            
          </ul>
        </li>
		
		
		
		
		
		
		
		<!-- <li><a href="selectcase1.php">Case Progress</a></li>	 -->
		
		 <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mange Guides <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="guideform.php">Add new guide</a></li>
			<li role="separator" class="divider"></li>
            <li><a href="viewguides.php">View guides</a></li>
           </ul>
		  
		  </li>
		
			
			
			
			
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mange Notifications<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="addnotifaction.php">Add new </a></li>
			<li role="separator" class="divider"></li>
            <li><a href="displaynotifications.php">View notifications</a></li>
           </ul>
		  
		  </li>
		
		
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mange Projects<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="selectdept.php">View</a></li>
			<li role="separator" class="divider"></li>
            <li><a href="selectdeptforreport.php">Generate Report</a></li>
           </ul>
		  
		  </li>
		  
		  
		  
		  <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Manage formats<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="newfarmat.php">Add New</a></li>
			<li role="separator" class="divider"></li>
            <li><a href="viewformat.php">View</a></li>
           </ul>
		  
		  </li> -->
		
		
      </ul>
      
	 
	  
	  
	  
      <ul class="nav navbar-nav navbar-right">
	  
		
   
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="login.php"><span class="glyphicon glyphicon-log-out" ></span> Logout</a></li>
           
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	
	