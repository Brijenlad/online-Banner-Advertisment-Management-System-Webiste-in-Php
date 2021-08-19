
<?php
	include('dbconnect.php');	
		session_start();
	global $_SESSION;
	include("header1.php");
	
?>
<html>


<?php
//$a=$_GET['inq_id'];
$sql="select * from complain";
//$sql="delete from inquiry where inq_id='$a'";
	
	$result=mysql_query($sql);
	$dyn_table = '<table border="1" cellpadding="10"><th colspan="2" style="background-color:Black; color:#FFFFFF;" >Complian detail</th>';
		while($row=mysql_fetch_array($result))
		{
		
		$dyn_table .= "<tr style='background:white;color:black;'><td style='color:black;'><b>".$row['com_id']."</b><br>".$row['title']."</b><br>".$row['detail']."</td><td><a style='color:green;' href='admin_complian_delete.php?com_id=$row[com_id]'>Delete</a>&nbsp;&nbsp;&nbsp;<a style='color:red;' href='admin_complian_update.php?com_id=$row[com_id]'>Update</a></td>";
			//echo "$row[com_id]"."$row[title]"."$row[detail]";
			//echo "<a href='admin_complian_delete.php?com_id=$row[com_id]'>delete</a>";
			//echo "<a href='admin_complian_update.php?com_id=$row[com_id]'>update</a><br>";
		}
		
		$dyn_table .= '</tr></table>';
				//echo "<a href='delete.php'>delete</a><br>";
	
?>

<body></br>
<div>
<?php
echo $dyn_table;
?>
</div>

</body>

</html>
<?php
include("footer1.php");
?>



