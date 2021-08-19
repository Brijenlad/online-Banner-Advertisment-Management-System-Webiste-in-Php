<?php
include("admin_header.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Inquiry</title>

<script type="text/javascript">


	function valid()
	{
		//var title;
		title=document.inquiry.txttitle.value;
		detail=document.inquiry.txtdetail.value;
		
		if(title=="")   //title
		{
			alert("Title can not be blank");
			document.inquiry.txttitle.focus();

		}
		if(detail=="")   //detail
		{
			alert("Enter Detail");
			document.inquiry.txtdetail.focus();

		}
	
	
	}
</script>

</head>

<body>
<div style="height:500px; width:500px; margin-left:500px;">
<form name="inquiry" method="post">
<ul style="list-style:none;">
	<li style="float:left; width:100px;">Inquiry Title:</li>
	<li><input type="text" name="txttitle" value="" /><br /><br /></li>
	
	<li style="float:left; width:100px;">Detail:</li>
	<li><textarea rows="2" cols="10" name="txtdetail"  ></textarea><br /><br /></li>
	<input type="submit" name="submit" value="submit" onclick="valid();" />
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
	
	if(isset($_POST['submit']))
	{
		$sql="insert into inquiry (title,detail) values ('$title','$detail')";
		$res=mysql_query($sql);
		
		if(!$res)
	{
		die("Could Not Execute Query".mysql_error());
	}
	else
	{
			//header("location:Login.php");
		
	}	
	
}
}
?>
<?php
include("admin_footer.php");
?>