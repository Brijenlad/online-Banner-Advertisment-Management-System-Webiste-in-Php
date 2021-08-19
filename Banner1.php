<?php
include('dbconnect.php');
session_start();
	global $_SESSION;

	if(!isset($_SESSION["email"]))
	{
		
		header("location:index.php");
	}
include("header.php");
//include("main.php");
?>
<?php


if(isset($_POST['submit']))
{			
	
	$size=$_POST['txtsize'];
	$price=$_POST['txtprice'];
	$img=$_POST['fimg'];
	$layout=$_POST['txtlayout'];

	if(isset($_POST['submit']))
	{
		$sql="insert into banner (size,price,img,layout) 
		      values ('$size','$price','$img','$layout')";
		$res=mysql_query($sql);
		
		if(!$res)
	{
		die("Could Not Execute Query".mysql_error());
	}
	else
	{
//			header("location:Login.php");
		
	}	
	
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Banner</title>

<script type="text/javascript">


	function valid()
	{
		var title;
		var size;
		var price;
		var logo;
		var layput;
		var detail;
		var timeduration;
		title=document.banner.txttitle.value;
		size=document.banner.txtsize.value;
		price=document.banner.txtprice.value;
		logo=document.banner.flogo.value;
		layout=document.banner.txtlayout.value;
		detail=document.banner.txtdetail.value;
		timeduration=document.banner.txttime.value;
		if(title=="")   //title
		{
			alert("Title can not be blank");
			banner.txttitle.focus();
			return false;
		}
		if(size=="")   //size
		{
			alert("enter banner size");
			banner.txtsize.focus();
			return false;
		}
		if(price=="")   //price
		{
			alert("enter price");
			banner.txtprice.focus();
			return false;
		}
		
		if(logo=="")   //logo
		{
			alert("please enter ur logo");
			banner.flogo.focus();
			return false;
		}
		if(layout=="")   //layout
		{
			alert("please define the layout");
			banner.txtlayout.focus();
			return false;
		}
		if(detail=="")   //detail
		{
			alert("please enter the detail");
			banner.txtdetail.focus();
			return false;
		}
		if(timeduration=="")   //timeduration
		{
			alert("field can not be blank");
			banner.txttime.focus();
			return false;
		}
	}
		
			</script>
</head>

<body>
<div style=" width:500px; margin-left::500px;">
<form name="banner" method="post" onsubmit="return valid()">
<ul style="list-style:none;">
	<li style="float:left; width:100px;">
		Banner Title:
	</li>
	<li><input type="text" name="txttitle" value=""  /><br /><br /></li>
	<li style="float:left; width:100px;">
		size:
	</li>
	<li><input type="text" name="txtsize" value=""  /><br /><br /></li>
	<li style="float:left; width:100px;">
		Price:
	</li>
	<li><input type="text" name="txtprice" value="" /><br /><br /></li>
	<li style="float:left; width:100px;">
		Logo:
	</li>
	<li><input type="file" name="flogo" value="" /><br /><br /></li>
	<li style="float:left; width:100px;">
		Layout:
	</li>
	<li><input type="text" name="txtlayout" value="" /><br /><br /></li>
	<li style="float:left; width:100px;">
		Link:
	</li>
	<li><input type="text" name="txtlink" value="" /><br /><br /></li>
	<li style="float:left; width:100px;">
		Detail:
	</li>
	<li><textarea rows="3" cols="20" name="txtdetail" ></textarea><br /><br /></li>
	<li style="float:left; width:100px;">
		Time Duration:
	</li>
	<li><input type="text" name="txttime" value="" /><br /><br /></li>
	<input type="submit" name="submit" value="submit"   />
</ul>
</form>

</div>
</body>
</html>



<?php
include("footer.php");
?>