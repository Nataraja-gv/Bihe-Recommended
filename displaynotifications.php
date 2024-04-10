<?php
include_once('db.php');

include_once('adminnavbar.php');

$result=display_del("select sino,date_format(ndate,'%d-%b-%Y') as ndate,deptname,message from notifications n,dept d where d.deptid=n.deptid",4,"notifications",0);
?>

<html>

<head>

</head>

<body>

<table class="table" ><caption><h3 class="text-danger" >Notificaton's Details</h3></caption>

<tr bgcolor=lightblue>
<th>Sino</th><th>Notification Date</th><th>Department</th><th>Description</th><th>Remove</th>
</tr>
<?php echo $result; ?>
</body>

</html>