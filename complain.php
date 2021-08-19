<?php
include('dbconnect.php');
session_start();
global $_SESSION;

include("header.php");

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
		$sql="insert into complain (reg_id,`title`,`detail`) values('".$eid."','".$title."','".$detail."')";
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


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Complain</title>

<script type="text/javascript" src="css/layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="css/layout/scripts/jquery.slidepanel.setup.js"></script>
<script type="text/javascript" src="css/layout/scripts/jquery.ui.min.js"></script>
<script type="text/javascript" src="css/layout/scripts/jquery.tabs.setup.js"></script>

<script type="text/javascript">
	function valid()
	{
		var ctitle;
		var detail;
		
		ctitle=document.complain.txttitle.value;
		detail=document.complain.txtdetail.value;
		if(ctitle=="")   //title
		{
			alert("Title Cannot be blank");
			document.complain.txttitle.focus();
			return false;
		}
		if(detail=="")   //description
		{
			alert("Please Enter Your Comment");
			document.complain.txtdetail.focus();
			return false;
		}
		
	}
</script>

</head>

<body>
<h1>&nbsp;&nbsp;Complain</h1>

<div style=" width:1000px;" >
<form name="complain" method="post" onsubmit="return valid();">
<ul style="list-style:none;">

<li style="float:left; width:100px;">Email Id : </li>
<li><input type="text" name="txtemail" value="<?php echo $_SESSION["email"]; ?>" disabled="disabled"/><br /><br /></li>
	<li style="float:left; width:100px;">Title :</li>
	<li><input type="text" name="txttitle" value="" /></li>
	<br />
	<li style="float:left; width:100px;">Comment :</li>
	<li><textarea rows="5" cols="50" name="txtdetail"></textarea></li>
	<br />
	<input type="submit" name="submit" value="submit" style="margin-left:370px;"/>
</ul>
</form>
</div>
</body>
</html>

<?php


?>
<?php
include("footer.php");
?>