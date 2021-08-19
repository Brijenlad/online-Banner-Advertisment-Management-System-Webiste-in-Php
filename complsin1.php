<?php
include("header.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Complain</title>
<script type="text/javascript" src="css/layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="css/layout/scripts/jquery.slidepanel.setup.js"></script>
<script type="text/javascript" src="css/layout/scripts/jquery.ui.min.js"></script>
<script type="text/javascript" src="css/layout/scripts/jquery.tabs.setup.js"></script>

<script>

$(function()
{$("#submit").click(function()
{

	
		var ctitle;
		var detail;
		
		ctitle=document.complain.txttitle.value;
		detail=document.complain.txtdetail.value;
		if(ctitle=="")   //title
		{
			alert("Title cannot blank");
			document.complain.txttitle.focus();
			return false;
		}
		if(detail=="")   //description
		{
			alert("Enter Detail");
			document.complain.txtdetail.focus();
			return false;
		}
		
	

} )});
</script>
</head>
<body>
<div style="height:500px; width:500px; margin-left:500px;">
<form name="complain" method="post" action="">
<ul style="list-style:none;">
<br /><br />
	<li style="float:left; width:100px;">Title:</li>
	<li><input type="text" name="txttitle" value="" /></li>
	<br />
	<li style="float:left; width:100px;">Detail:</li>
	<li><input type="text" name="txtdetail" value="" style="height:50px; width:150px;"/></li>
	<input type="submit" name="submit" value="submit" id="submit"/>
</ul>
</form>
</div>
</body>
</html>
<?php

include('dbconnect.php');

if(isset($_POST['submit']))
{			
	$title=$_POST['txttitle'];
	$detail=$_POST['txtdetail'];
	echo $title;
	echo $detail;
	
	if(isset($_POST['submit']))
	{
		$sql="insert into complain (title,detail) values('$title','$detail')";
		$res=mysql_query($sql);
		
	if(!$res)
		{
			die("Could Not Execute Query".mysql_error());
			echo "Thank you for ur response.......";	
		}
		else
		{
				
		}		
	}
}
?>
<?php
include("footer.php");
?>