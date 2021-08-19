<?php
	include('dbconnect.php');
	session_start();
	if(isset($_POST['submit']))
	{
		$userid=$_REQUEST['txtemail'];
		$usrpass=$_REQUEST['txtpwd'];
		if($userid!="" && $userpass!="")
		{
			$query=mysql_query("select * from  register where email=".$userid." and pwd=".$userpass."") or die(mysql_error());
			$res=mysql_fetch_row($query);
			if($res)
			{
				$_SESSION['txtemail']=$userid;
				header("location:index.html");
			}
			else
			{
				echo 'you entered incorrect username and password';
			}
		}
		else
		{
			echo 'enter both username and password';
		}
	} 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<div style="height:500px; width:500px; margin-left:500px;">
<form method="post" action="">
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
