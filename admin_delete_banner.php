
<?php

include("dbconnect.php");
?>
<html>
<body>
<div style="height:500px";>
<?php

$id=$_GET["bid"];
//echo $id;
$sql="delete from gallery where gal_id='$id'";
$res=mysql_query($sql);
if(!$res)
{
	die("Not Executed".mysql_error());
}
else
{
	$msg="deleted Successfully";
	header("location:admin_home2.php?msg=$msg");
}

?>
</div>
</body>
</html>
