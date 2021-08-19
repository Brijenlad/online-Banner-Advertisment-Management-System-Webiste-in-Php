<?php
include("header.php");
?>
<?php
	include('dbconnect.php');
	$userid=$_REQUEST['txtemail'];
	$usrpass=$_REQUEST['txtpwd'];
	if(!isset($_POST['submit']))
	{
		header("location:index.html");
	}
	else
	{
	}
		
		$sql="select * from register";
		$result = mysql_query($sql);
		
		if($userid=="admin@gmail.com")
		{
			header("location:admin_home.html");
		}
		else
		{
			$temp="user name and password is wrong";
			header("Location:index.html?msg=$temp");
		 	
		}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login</title>
</head>

<body>
<div style="height:500px; width:500px; margin-left:500px;">
<form>
<ul style="list-style:none;">
<br /><br />
	<li style="float:left; width:100px;">Email Id:</li>
	<li><input type="text" name="txtemail" value=""  /><br /><br /></li>
	
	<li style="float:left; width:100px;">Password:</li>
	<li><input type="password" name="txtpwd" value=""  /><br /><br /></li>
	
	<input type="submit" name="submit" value="submit"  />
	<input type="submit" name="submit" value="Logout"  />

</ul>
</form>
</div>
</body>
</html>
<?php
include("footer.php");
?>