<?php
include("dbconnect.php");

include("admin_header.php");
?>

<?php

$id=$_GET["cnct_id"];
echo $id;


$sql="delete from contact where cnct_id='$id'";

$res=mysql_query($sql);


if(!$res)
{
	die("Not Executed".mysql_error());

}
else
{
	$msg="deleted Successfully";
	header("location:admin_contact.php?msg=$msg");
}

?>
<?php
include("admin_footer.php");
?>