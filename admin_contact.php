
<?php
	include('dbconnect.php');	
	include("admin_header.php");
?>
<html>

<?php

//$dyn_table = '<table border="1" cellpadding="10"><th colspan="2" style="background-color:Black; color:#FFFFFF;">Teacher</th>';
//$a=$_GET['inq_id'];
$sql="select * from contact";
//$sql="delete from inquiry where inq_id='$a'";
	
	$result=mysql_query($sql);
	$dyn_table = '<table border="1" cellpadding="10"><th colspan="2" style="background-color:Black; color:#FFFFFF;" >Contact detail</th>';
	
		while($row=mysql_fetch_array($result))
		{	
			$dyn_table .= "<tr style='background:white;color:black;'><td style='color:black;'><b>".$row['cnct_id']."</b><br>".$row['uname']."</td><td><a style='color:green;' href='admin_contact_delete.php?cnct_id=$row[cnct_id]'>Delete</a>&nbsp;&nbsp;&nbsp;<a style='color:red;' href='admin_contact_update.php?cnct_id=$row[cnct_id]'>Update</a></td>";
			
			
		
		}
				//echo "<a href='delete.php'>delete</a><br
				//>";
	$dyn_table .= '</tr></table>';

?>

<body><br />
<div  style="height:500px;">
<?php
echo $dyn_table;
?>
</div>
</body>

</html>
<?php
	include("admin_footer.php");
?>
																	