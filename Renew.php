<?php
include('dbconnect.php');
session_start();

include("header.php");
global $_SESSION;
$r=$_SESSION['reg_id'];
$u=$_SESSION['email'];

if(!isset($_SESSION["email"]))
	{		
		header("location:index.php");
	}


?>
<?php

if(isset($_POST['submit']))
{			
	$uname=$_POST['txtuname'];
	$email=$_POST['txtemail'];
	$detail=$_POST['txtdetail'];
	$time=$_POST['txttime'];
	echo $uname;
	echo $email;
	echo $detail;
	echo $time;
		
if(isset($_POST['submit']))
{
	//$sql="insert into register values('$uname','$contact','$email','$pwd','$cpwd')";
	$sql="insert into renew(uname,email,detail,time) values ('$uname','$email','$detail','$time')";
	$res=mysql_query($sql);
	
	if(!$res)
	{
		die("Could Not Execute Query".mysql_error());
	}
	else
	{
		//	header("location:Login.php");
	}	
	
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Renew</title>
</head>
<script type="text/javascript">


	function valid()
	{
	var username;
	//	len=0;
		username=document.renew.txtuname.value;
		emailid=document.renew.txtemail.value;
		detail=document.renew.txtdetail.value;
		timeduration=document.renew.txttime.value;
		
		
		if(username=="")  //username
		{
			alert("Username cannot be blank");
			document.renew.txtuname.focus();
			return false;
		
		}	
		else										// checking special character in user name
		{	
			len=username.length;
			len--;			
			for(i=0;i<=username.length-1;i++)
			{
			    ch=username.charAt(i);
				if((ch>='a' && ch<='z') || (ch>='A' && ch<='Z') || (ch>=0 && ch<=9) || ch==' ' || ch=='_')
				{
			  		count++;	  
					if((i==0 && ch==' ' ) || (i==len && ch==' ') )
					{
				   		count=0;
					   	break;
		  			}
				}
				else
				{
					count=0;
					break;
				}
 			}
 			if(count==0)
 			{ 
 		//		document.getElementById('select_lbl').style.visibility='hidden';
		//		document.getElementById('uname_lbl').style.visibility='visible';
			//	document.getElementById('uname_lbl').innerHTML="Special Character not Allow";
				alert('special character not allow');
				document.renew.txtuname.focus();
				//registration.txtuname.value="";
				return false;
			}

		}
		
	if(emailid=="")   //check emailid
		{
			alert("Please Enter emailid");
			document.renew.txtemail.focus();
			return false;
		}
		if(emailid!="")
		{
			var mailformat=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			if(emailid.match(mailformat))
			{
				//alert("Valid Emailid");
				
			}
			else
			{
				alert("Invalid emailid");
				return false;
				renew.txtemail.focus();
			}
		}
		
		
		
		if(detail=="")   //detail
		{
			alert("Enter Detail");
			document.renew.txtdetail.focus();
			return false;
		}
		if(timeduration=="")  //Time Duration
		{
			alert(" cannot be blank");
			document.renew.txttime.focus();
			return false;
		}	
	
	
	}
</script>

<body>
<div >
<form name="renew" method="post"> 

<ul style="list-style:none;">

	
	<li style="float:left; width:100px;">Username:</li>
	<li><input type="text" name="txtuname" value="" /><br /><br /></li>
	
	<li style="float:left; width:100px;">EmailId:</li>
	<li><input type="text" name="txtemail" value="" /><br /><br /></li>
	
	<li style="float:left; width:100px;">Detail:</li>
	<li><textarea rows="3" cols="20"  name="txtdetail"></textarea><br /><br /></li>
	
	<li style="float:left; width:100px;">Time Duration:</li>
	<li><input type="text" name="txttime" value="" /><br /><br /></li>
	<input type="submit" name="submit" value="submit" onclick="valid();" />
</ul>
</form>
</div>
</body>
</html>


<?php
include("footer.php");
?>