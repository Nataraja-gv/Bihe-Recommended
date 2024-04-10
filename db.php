	<?php

	

	function execute( $sql )
	{

		$conn=mysqli_connect('localhost','root','','pts');

		if( !$conn )
		{
		die( mysqli_connect_error() );
		}


		$res=$conn->query( $sql );

		if( !$res )
		{
		die( mysqli_error( $conn ) );
		}


		return($res);


	}

















	
	function insert( $ta,$fr )
	{
		
		

		$sql="insert into ".$ta." values('";
		foreach( $fr as $key=>$value )
		{
			if( $key=="submit" )
			{
			}
			else
			{
			$sql=$sql.$value."','";				
			}
		
		}
		$sql=substr($sql,0,strlen($sql)-2);
		$sql=$sql.")";

		return($sql);

		
	}


		function display( $sql,$cnt)
		{
		
			$connect=mysql_connect("localhost","root","");

			$db=mysql_select_db("pts",$connect);

			//$query="select * from $tn";

			$result=mysql_query($sql);
			$r="";
			while($row=mysql_fetch_array($result))
			{
				$r=$r."<tr>";
				$j=0;
				for($i=0; $i<$cnt; $i=$i+1 )
				{

				$r=$r."<td>".$row[$j]."</td>";

				$j=$j+1;

				}

				$r=$r."</tr>";

			}

			$r=$r."</table>";
			
			return($r);

		}
		
		
		function display_del( $sql,$cnt,$tname,$di)
		{
		
			$connect=mysql_connect("localhost","root","");

			$db=mysql_select_db("pts",$connect);

			//$query="select * from $tn";

			$result=mysql_query($sql);
			$r="";
			while($row=mysql_fetch_array($result))
			{
				$r=$r."<tr>";
				$j=0;
				for($i=0; $i<$cnt; $i=$i+1 )
				{

				$r=$r."<td>".$row[$j]."</td>";

				$j=$j+1;

				}

				$r=$r."<td class=del ><a href=delete.php?sino=$row[$di]&tname=$tname >Delete</a></td></tr>";

			}

			$r=$r."</table>";
			
			return($r);

		}



	?>