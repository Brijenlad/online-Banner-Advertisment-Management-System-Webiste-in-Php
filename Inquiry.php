<?php
include('dbconnect.php');
session_start();
	global $_SESSION;

	if(!isset($_SESSION["email"]))
	{		
		header("location:index.php");
	}
	
	
if(isset($_POST['submit']))
{			
	$title=$_POST['txttitle'];
	$detail=$_POST['txtdetail'];
	$eid=$_SESSION['reg_id'];
	if(isset($_POST['submit']))
	{
		$sql="insert into inquiry (reg_id,title,detail) values ('".$eid."','".$title."','".$detail."')";
		$res=mysql_query($sql);
		echo "<script> alert('Thank You For Your Inquiry.	');</script>";
		
		header('location:user_home.php');
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
include("header.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Inquiry</title>



<script>
	
	function valid()
	{
		var title=document.inquiry.txttitle.value;
		var detail=document.inquiry.txtdetail.value;
		
		if(title=="")   //title
		{
			alert("Title Cannot be blank");
			document.inquiry.txttitle.focus();
			return false;

		}
		if(detail=="")   //detail
		{
			alert("Please Enter Your Comment.");
			document.inquiry.txtdetail.focus();
			return false;
		}

	}

</script>
</head>

<body>
<h1>&nbsp;&nbsp;Inquiry</h1>
<div>
<form name="inquiry" method="post"  onsubmit="return valid()">
	<ul style="list-style:none;">
		<li style="float:left; width:100px;">Email Id :</li>
		<li><input type="text" name="txtemail" value="<?php echo $_SESSION["email"]; ?>" disabled="disabled"/><br /><br /></li>
		<li style="float:left; width:100px;"> Title :</li>
		<li><input type="text" name="txttitle" value="" /><br /><br /></li>	
		<li style="float:left; width:100px;">Comment :</li>
		<li><textarea rows="5" cols="50" name="txtdetail" ></textarea><br /><br /></li>
	<input style="margin-left:370px;"type="submit" name="submit" value="submit"  />
</ul>
</form>
</div>
</body>
</html>
<?php
include("footer.php");
?>