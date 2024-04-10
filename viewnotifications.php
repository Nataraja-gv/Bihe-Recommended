
<?php

	include_once('navbar.php');
	
	include_once('db.php');
	
	$sql="select * from dept";
	$res=execute( $sql );
	

?>


<head>
<script src="jquery-1.11.0.js">
</script>

<script>
$(document).ready( function(){

$("#notiresult").load("getnotifications.php",{deptid:"all"});

$("#deptid").change( function(){


$("#notiresult").load("getnotifications.php",{deptid:$(this).val()});
});

});
</script>

</head>

<body>
<div  style=""  class="container" >

<h2>Notification's form</h2>
<select name=deptid id=deptid style="height:30px; font-weight:bold; ">
<option value=#>--------- Choose Dept ------------</option>
<option value=all>View all</option>
<?php
while( $row=$res->fetch_object())
{
echo "<option value=$row->deptid>$row->deptname</option>";
}
?>
</select>
</div>

<div id=notiresult class="container" >
</div>
</body>

</html>