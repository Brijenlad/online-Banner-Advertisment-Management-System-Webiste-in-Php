<?php

	include("dbconnect.php");
?>

<?php
	
		$sql="select * from inquiry";
		$result=mysql_query($sql);
		
		while($row=mysql_fetch_array($result))
		{
			echo "$row[inq_id]"."$row[title]"."$row[detail]";
			echo "<a href='admin_inquiry_view.php?com_id=$row[inq_id]'></a><br>";
				
		}

?>