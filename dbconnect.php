<?php

$loc="localhost";
$con=mysql_connect($loc,"root","");
if($con)
{
	//echo "Connection established Successfully";
}
else
{
	die("Could not connected");
}

$db=mysql_select_db("advertise");
if($db)
{
	//echo "Database selected Succefully";
	
}
else
{
	die("Could not connected");
}
?>
