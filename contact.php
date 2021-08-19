<?php
include('dbconnect.php');
session_start();
global $_SESSION;
if(!isset($_SESSION["email"]))
	{		
		header("location:index.php");
	}

include("header.php");


?>
<?php

if(isset($_POST['submit']))
{			
	$uname=$_POST['txtuname'];
	$contact=$_POST['txtcnt'];
	$email=$_POST['txtemail'];
	$msg=$_POST['txtmsg'];
	
	echo $uname;
	echo $contact;
	echo $email;
	echo $msg;
	
		
	//$sql="insert into register values('$uname','$contact','$email','$pwd','$cpwd')";
	$sql="insert into contact(uname,contact,email,msg) values ('$uname','$contact','$email','$msg')";
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

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Contact</title>



</head>

<body>
<div >
<form name="contact" method="post" onsubmit="return valid()">


<span style="font-size: 18pt; font-family: Arial; text-decoration: underline"><b>Owner</b>
                    </span>
                    <p style="color:black;">
                        <font face="Arial, Helvetica, sans-serif" size="+1"><img src="img/pekerja.png" height=30px width=30px/>&nbsp;<b>BRIJEN LAD</b></font><br>
						   <font face="Arial, Helvetica, sans-serif" size="+1"><img src="img/pekerja.png" height=30px width=30px/>&nbsp;<b>SHIV NAIK</b></font>
					</p>
                    <p >
                        <b><font face="Arial, Helvetica, sans-serif"><u><font size="+2">Contact</font></u></font></b></p>
                    <p style="color:black;">
                        <b><font face="Arial" size="+1">
									<img src="img/tel_logo.png" height=30px width=30px/>&nbsp;8485995322</font></b></p> <p style="color:black;">
                        <b><font face="Arial" size="+1">
									<img src="img/tel_logo.png" height=30px width=30px/>&nbsp;9099507913</font></b></p>
                    <p >
                        <b><font face="Arial, Helvetica, sans-serif">
                            
                            <font size="+2"><u>Email Id</u></font></font></b></p>
                    <p style="color:black;">
                        <b><font face="Arial, Helvetica, sans-serif" size="+1"><img src="img/email.png" height=30px width=30px/>&nbsp;brijen@gmail.com<br />
                        </font></b>
						<b><font face="Arial, Helvetica, sans-serif" size="+1"><img src="img/email.png" height=30px width=30px/>&nbsp;shiv@gmail.com<br />
                        </font></b>
                    </p>
                    <p >
                        <b><font face="Arial, Helvetica, sans-serif">
                            
                            <font size="+2"><u>Address</u></font> </font></b>
                    </p>
                    <p style="color:black;">
                        <b><font face="Arial, Helvetica, sans-serif" size="+0"><img src="img/home_icon.png" height=30px width=30px/>&nbsp;Near JAY AMBE Complex, 
						M.G Road,
						Navsari
				  <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gujarat -India</font></b>
                    </p>
                   <p >
                        <b><font face="Arial, Helvetica, sans-serif">
                            
                            <font size="+2"><u>Follow Us </u></font></font></b></p>
                    <p style="color:black;">
                        <b><font face="Arial, Helvetica, sans-serif" size="+1"><img src="img/blue-facebook-logo.png" height=30px width=30px/>&nbsp;www.facebook.com/advertise
                        <img src="img/blogger.png" height=30px width=30px/>&nbsp;www.blogger.com/advertise<br>
						<img src="img/Twitter-icon.png" height=30px width=30px/>&nbsp;www.twitter.com/advertise
                        <img src="img/linkedin.png" height=30px width=30px/>&nbsp;www.linkedin.com/advertise
						</font></b>
                    </p>

</form>
</div>
</body>
</html>

<?php
include("footer.php");
?>
