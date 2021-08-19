<?php

	include("dbconnect.php");
?>

<?php
	
		$sql="select * from contact";
		$result=mysql_query($sql);
		
		while($row=mysql_fetch_array($result))
		{
			echo "$row[con_id]"."$row[uname]"."$row[email]"."$row[contact]"."$row[msg]";
			echo "<a href='user_contact_view.php?com_id=$row[com_id]'></a><br>";
				
		}

?>