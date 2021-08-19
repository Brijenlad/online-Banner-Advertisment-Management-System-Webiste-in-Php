<?php

	include("dbconnect.php");
?>

<?php
	
		$sql="select * from complain";
		$result=mysql_query($sql);
		
		while($row=mysql_fetch_array($result))
		{
			echo "$row[com_id]"."$row[title]"."$row[detail]";
			echo "<a href='admin_complain_view.php?com_id=$row[com_id]'></a><br>";
				
		}

?>