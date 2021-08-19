<?php
include('dbconnect.php');
session_start();
include('header.php');
$gid=$_GET['cn'];
$regid=$_SESSION['reg_id'];	


 $sql="delete from banner where ban_id='".$gid."'";
$result=mysql_query($sql);
?>
