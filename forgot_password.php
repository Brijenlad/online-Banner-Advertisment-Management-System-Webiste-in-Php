<?php
include('dbconnect.php');
//include('header.php');
session_start();
global $_SESSION;
if(isset($_SESSION['email']))
	{
		if($_SESSION["email"]=="admin@admin.com")
		{
			header("location:admin_home1.php");
		}
		else
		{
			header("location:user_home.php");
		}
	}	
?>
<?php

if(isset($_POST['submit']))
{		
		 $uname=$_POST['txtuname'];
		 $contact=$_POST['txtcnt'];
		 $email=$_POST['txtemail'];
			
	$sql1="select * from register where uname='".$uname."' and contact='".$contact."' and email='".$email."'";
	$res1=mysql_query($sql1);
	if(!$res1)
	{
		die("could not select".mysql_error());
	}
	elseif($row=mysql_num_rows($res1))
	{
	
		if($row>0)
		{
			while($row1=mysql_fetch_array($res1))
			{
				$p=$row1['pwd'];
				echo "<script> alert('Your Password : $p');</script>";	
			}
		}		
		else
		{}
	}
	else
	{
		echo "<script> alert('Your Username or Emailid or Contact Number is Wrong');</script>";
	}
	
}
?>



<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Forgot Password</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.ui.min.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.defaultvalue.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.scrollTo-min.js"></script>
<script type="text/javascript">
$(function()
{$("#submit").click(function(){

		
		var username;
		var cnt;
		var emailid;
		
	count=0;
		username=document.registration.txtuname.value;
		cnt=document.registration.txtcnt.value;
		emailid=document.registration.txtemail.value;
	
		if(username=="")
		{
			alert("Enter Username Number");
			document.registration.txtuname.focus();
			return false;
			
		}
		else										// checking special character in user name
		{	
			len=username.length;
			len--;			
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
 				
				alert('enter username');
				registration.usertxt.focus();
			
				return false;
			}

		}
		
		

		if(cnt=="")			//check contact number
		{
			alert("Enter Contact Number");
			document.registration.txtcnt.focus();
			return false;
		}
		else
		{
			if(cnt.length==10)
			{
				for(i=0;i<cnt.length;i++)
				{
					ch=cnt.charAt(i);
					if(i==0 && ch!=9 && ch!=8 && ch!=7)
					{
						count=0;
						break;
					}
					else
					{
						if(ch>=0 && ch<=9)
						{
							count++;
							
						}
						else
						{
							count=0;
							break;
						}
					}
				}	
			}
			
			else
			{
				alert("Contact Number should be 10 digit");
				document.registration.txtcnt.focus();
				return false;
			}
		}
		if(count==0)
 		{
 			alert("Number Should be ,start from 9 or 8 or 7");
			document.registration.txtcnt.focus();
 			return false;
		}
		
		
		if(emailid=="")   //check emailid
		{
			alert("Please Enter emailid");
			document.registration.txtemail.focus();
			return false;
		}
		
		if(emailid!="")
		{
			var mailformat=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			if(emailid.match(mailformat))
			{
				
			}
			else
			{
				alert("Invalid emailid");
				registration.txtemail.focus();
				return false;
			}
		}
		} )});	
</script>
<!-- Homepage Only Scripts -->
<script type="text/javascript" src="layout/scripts/jquery.cycle.min.js"></script>
<script type="text/javascript">
$(function() {
    $('#hpage_slider').after('<div id="fsn"><ul id="fs_pagination">').cycle({
        timeout: 5000,
        fx: 'fade',
        pager: '#fs_pagination',
        pause: 1,
        pauseOnPagerHover: 0
    });
});
</script>
<script type="text/javascript" src="layout/scripts/piecemaker/swfobject/swfobject.js"></script>
<script type="text/javascript">
var flashvars = {};
flashvars.cssSource = "layout/scripts/piecemaker/piecemaker.css";
flashvars.xmlSource = "layout/scripts/piecemaker/piecemaker.xml";
var params = {};
params.play = "false";
params.menu = "false";
params.scale = "showall";
params.wmode = "transparent";
params.allowfullscreen = "true";
params.allowscriptaccess = "sameDomain";
params.allownetworking = "all";
swfobject.embedSWF('layout/scripts/piecemaker/piecemaker.swf', 'piecemaker', '960', '430', '10', null, flashvars, params, null);
</script>
<!-- End Homepage Only Scripts -->
</head>
<body id="top">
<div class="wrapper col1">
  <div id="topbar" class="clear"> 
  </div>
</div>
<div class="wrapper col2">
  <div id="header" class="clear">
    <div class="fl_left">
      <h1><a href="user_home.php">Online Banner Advertisement</a></h1>
    </div>
    <div id="topnav">
			<ul>
	    <li><a href="contact_guest.php">Contact Us</a></li>
		<li	><a href="index.php">Homepage</a></li>	
      </ul>
    </div>
  </div>
</div>
<div class="wrapper col3">
  <div id="featured_slide"> 
    <!-- ####################################################################################################### -->
    <!-- ####################################################################################################### --> 
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="container" class="clear"> 
  <!-- ####################################################################################################### -->
    <div id="shout" class="clear">
      <div class="fl_left">
        <h2>Need A Professional Advertising..... ?</h2>
        <p>Why not try our services today, you won't regret your choice !</p>
      </div>
      <p class="fl_right"><a href="contact_guest.php">Contact Us Today</a></p>
    </div>
<div >
<form name="registration" method="post">
<ul style="list-style:none;">
<br /><br />
	<li style="float:left; width:156px;">
		User Name:
	</li>
	
	<li>
		<input type="text" name="txtuname" value=""/>
	</li><br>
	<li style="float:left; width:156px;">
		Contact:
	</li>
	<li>
		<input type="text" name="txtcnt" value="" />
	</li><br>	
	<li style="float:left; width:156px;">
		Email Id:
	</li>
	<li>
		<input type="text" name="txtemail" value="" />
	</li><br>
	<br><br>
	<li style="margin-left:230px; width:150px;">
	<input type="submit" name="submit" value="submit" id="submit" />	
	</li>
</ul><br>
</form>
</div>


</body>

</html>



<?php
include("footer.php");
?>