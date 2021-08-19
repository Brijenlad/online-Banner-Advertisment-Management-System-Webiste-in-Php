<?php
include("dbconnect.php");

$a=$_GET["rid"];
$s=$_GET["s"];
if($s=="Approved")
{
	$sql = "UPDATE `renew` SET `status` = 'Pending' WHERE `renew_id` = '".$a."'";
	$res=mysql_query($sql);
	header('location:admin_renew.php');
}	
else
{
	$sql = "UPDATE `renew` SET `status` = 'Approved' WHERE `renew_id` = '".$a."'";
	$res=mysql_query($sql);
	header('location:admin_renew.php');
}

?>
	