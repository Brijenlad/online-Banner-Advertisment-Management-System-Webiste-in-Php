<?php
include('dbconnect.php');
session_start();
	global $_SESSION;

	if(!isset($_SESSION["email"]))
	{
		
		header("location:index.php");
	}
include("header.php");
?>
<?php

//$r=$_GET[];
$sql="select * from banner ORDER BY ban_id DESC";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{
	$r=$row['ban_id'];
	echo $r;
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Online Banner Advertisement</title>
</head>

<body>
</body>
</html>


<?php
include("footer.php");
?>
