<?php

include('dbconnect.php');
session_start();

include("header1.php");
global $_SESSION;
//$r=$_SESSION['reg_id'];
$u=$_SESSION['email'];


if(!isset($_SESSION["email"]))
	{		
		header("location:index.php");
	}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<a href="report1.php"> Particular Date Selection Report </a><br /><br />
<a href="daily_report.php"> Daily Report </a><br /><br />

<a href="re_copy.php">Banner Order Report</a><br />
<br><a href="approval_report.php"> Renew Approval Report </a><br>
<br><a href="pending_report.php"> Renew Pending Report </a><br><br />

</body>
</html>

<?php
include('footer1.php');
?>