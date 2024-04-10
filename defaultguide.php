<?php

session_start();
$uname=$_SESSION['uname'];

include_once('db.php');

$sql="select  * from guides where uname='$uname'";
$res=execute( $sql);

$row=$res->fetch_object();

$img=$row->imgname;
$name=$row->name;
?>

<html>

<body>
<center>

<img src='photos/<?php echo $img ?>'  width=250px height=250px />
<br><br>
WELCOME - <font color=blue size=5><?php echo $name ?></font>
</center>

</body>
</html>
