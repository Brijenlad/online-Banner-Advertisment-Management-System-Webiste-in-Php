<?php

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registration</title>
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
		var pass;
		var cpass; 
		
	count=0;
		username=document.registration.txtuname.value;
		cnt=document.registration.txtcnt.value;
		emailid=document.registration.txtemail.value;
		pass=document.registration.txtpwd.value;
		cpass=document.registration.txtcpwd.value;
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
			
		if(pass=="")		//check password
		{
			alert("Enter password");
			registration.txtpwd.focus();
			return false;
		}
		if(cpass=="")   	//check confirm password
		{
			alert("Enter Confirm Password");
			registration.txtcpwd.focus();
			return false;
		}
		
		if(pass!=cpass)		// match both password
		{
			alert("Confirm Password Not Matching");
			registration.txtpwd.value="";
			registration.txtcpwd.value="";
			registration.txtcpwd.focus();
			return false;
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
			 <li><a href="register.php">Registration</a></li>
	    <li><a href="index.php">Homepage</a></li>
      </ul>
    </div>
  </div>
</div>
<div class="wrapper col4">
  <div id="container" class="clear"> 
  <!-- ####################################################################################################### -->
    <div id="shout" class="clear">
      <div class="fl_left">
        <h2>Need A Professional Advertising..... ?</h2>
        <p>Why not try our services today, you won't regret your choice !</p>
      </div>
      <p class="fl_right"><a href="contact.php">Contact Us Today</a></p>
    </div>
	
<div >
<form name="contact" method="post" onsubmit="return valid()">


<span style="font-size: 18pt; font-family: Arial; text-decoration: underline"><b>Owner</b>
                    </span>
                    <p style="color:black;">
                        <font face="Arial, Helvetica, sans-serif" size="+1"><img src="img/pekerja.png" height=30px width=30px/>&nbsp;<b>BRIJEN G LAD</b></font>
                    </p>
					<p style="color:black;">
                        <font face="Arial, Helvetica, sans-serif" size="+1"><img src="img/pekerja.png" height=30px width=30px/>&nbsp;<b>SHIV S NAIK</b></font>
                    </p>
                    <p >
                        <b><font face="Arial, Helvetica, sans-serif"><u><font size="+2">Contact</font></u></font></b></p>
                    <p style="color:black;">
                        <b><font face="Arial, Helvetica, sans-serif" size="+1">
									<img src="img/tel_logo.png" height=30px width=30px/>&nbsp;8485995322</font></b></p>
									<b><font face="Arial, Helvetica, sans-serif" size="+1">
									<img src="img/tel_logo.png" height=30px width=30px/>&nbsp;9099507913</font></b></p>
                    <p >
                        <b><font face="Arial, Helvetica, sans-serif">
                            
                            <font size="+2"><u>Email Id</u></font></font></b></p>
                    <p style="color:black;">
                        <b><font face="Arial, Helvetica, sans-serif" size="+1"><img src="img/email.png" height=30px width=30px/>&nbsp;brijen@gmail.com<br />
                        </font></b>
                    </p>
					<p style="color:black;">
                        <b><font face="Arial, Helvetica, sans-serif" size="+1"><img src="img/email.png" height=30px width=30px/>&nbsp;Shiv@gmail.com<br />
                        </font></b>
                    </p>
                    <p >
                        <b><font face="Arial, Helvetica, sans-serif">
                            
                            <font size="+2"><u>Address</u></font> </font></b>
                    </p>
                    <p style="color:black;">
                        <b><font face="Arial, Helvetica, sans-serif" size="+0"><img src="img/home_icon.png" height=30px width=30px/>&nbsp;Near JAY AMBE Complex, 
						M.G Road,
						Navsari.
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
