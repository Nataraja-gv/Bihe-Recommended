<?php

	session_start();
	
	include_once('db.php');
	
	$ltype=$_REQUEST['ltype'];
	$uname=$_REQUEST['uname'];
	$pwd=$_REQUEST['pwd'];
	
	if( $ltype=='admin' )
	{
	
		if( $uname=='admin' && $pwd=='admin' )
		{
			header('Location:adminhomepage.php');
		}
		else
		{
			echo "<center><br><br><font color=red size=6>Either Username / Password is Wrong</font></center>";
			
			include_once('login.php');
			
		}
	
	}
	else
	{
	$sql="select g.deptid as deptid,uname,deptname from guides g,dept d where( uname='$uname' and pwd='$pwd' and g.deptid=d.deptid )";
	$res=execute( $sql );
	$row=$res->fetch_object();

		if( $row )
		{
		
		$_SESSION['uname']=$uname;
		$_SESSION['deptid']=$row->deptid;
		$_SESSION['deptname']=$row->deptname;
		header('Location: guidehomepage.php');
		}
		else
		{
		echo "<center><br><br><font color=red size=6>Either Username / Password is Wrong</font></center>";
		
		include_once('login.php');
		}
	}

?>

