
<?php

include("dbconnect.php");
include("admin_header.php");
?>
<html>
<body>
<div style="height:500px";>
<?php

$id=$_GET["inq_id"];
//echo $id;


$sql="delete from inquiry where inq_id='$id'";
$res=mysql_query($sql);
if(!$res)
{
	die("Not Executed".mysql_error());

}
else
{
	$msg="deleted Successfully";
	header("location:inquiry_delete.php?msg=$msg");
}

?>
</div>
</body>
</html>
<?php
include("admin_footer.php");
?>