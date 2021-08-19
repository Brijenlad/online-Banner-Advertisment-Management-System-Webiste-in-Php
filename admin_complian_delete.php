<?php
session_start();
include("dbconnect.php");
include("admin_header.php");
?>
<html>
<body>
<div style="height:500px";>
<?php

$id=$_GET["com_id"];
//echo $id;


$sql="delete from complain where com_id='$id'";
$res=mysql_query($sql);
if(!$res)
{
	die("Not Executed".mysql_error());

}
else
{
	$msg="deleted Successfully";
	header("location:complian_delete.php?msg=$msg");
}

?>
</div>
</body>
</html>
<?php
include("admin_footer.php");
?>