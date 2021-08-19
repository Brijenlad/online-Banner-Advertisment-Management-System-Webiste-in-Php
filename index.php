<?php
	include('dbconnect.php');
	session_start();
	global $_SESSION;
	
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: PhotoProwess
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Online Banner Advertise</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.ui.min.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.defaultvalue.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.scrollTo-min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
    $("#fullname, #validemail, #message").defaultvalue("Full Name", "Email Address", "Message");
    $('#shout a').click(function () {
        var to = $(this).attr('href');
        $.scrollTo(to, 1200);
        return false;
    });
    $('a.topOfPage').click(function () {
        $.scrollTo(0, 1200);
        return false;
    });
    $("#tabcontainer").tabs({
        event: "click"
    });
});

$(document).ready(function(){$("#submit").click(function(){
	
	var emailid=LoginForm.txtemail.value;
	var upass=LoginForm.txtpwd.value;
		
	
	if(emailid=="")   //check emailid
		{
			alert("Please Enter emailid");
			document.LoginForm.txtemail.focus();
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
				LoginForm.txtemail.focus();
				
				return false;
			}
		}
	if(upass=="")
	{
		alert("Please Enter Password.");
		LoginForm.txtpwd.value="";
		LoginForm.txtpwd.focus();
		return false;
	}

});});


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
<?php
if(isset($_SESSION['email']))
	{
		if($_SESSION["email"]=="admin@admin.com")
		{
			header("location:admin_home.php");
		}
		else
		{
			header("location:user_home.php");
		}
	}	
		if(isset($_POST['submit']))
		{
		
			$email=$_POST['txtemail'];
			$pass=$_POST['txtpwd'];
			header("location:login_pass1.php?id=$email&pass=$pass");	
		}
		else
		{
			//$a=$_GET['msg'];
		//	echo "<b><font style='color:#FF3300; right:100px;'>".$a."</font></b>";
			//echo "<script> alert('user name and password is wrong');</script>";
		
		}

?>
<body id="top">
<div class="wrapper col1">
  <div id="topbar" class="clear">
    <ul>
      <ul>

	      <li><a href="#"></a></li>
      <li class="last"><a href="#"></a></li>
	 
       </ul>
     </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="header" class="clear">
    <div class="fl_left">
      <h1><a href="index.php">Online Banner Advertisement</a></h1>
      
    </div>
    <div id="topnav">
      <ul>
       <li><a href="contact_guest.php">Contact Us</a></li>
	   <li><a href="register.php">Registration</a></li>
		
      </ul>
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3"  class="clear" >
<div  style="width:300px; margin-left:200px;">
  <div> 
        <div id="hpage_slider" style="height:300px ; list-style:none;">
        <div class="item"><img src="img/s1.jpg" alt="" height=400px width=950px/></div>
        <div class="item"><img src="img/slide2.jpg" alt="" height=400px width=950px/></div>
       <div class="item"><img src="img/s3.jpg" alt="" height=400px width=950px/></div>
	   <!-- <div class="item"><img src="img/img3.jpg" alt="" height=400px width=950px/></div>-->
        <!--	    <div class="item"><img src="img/img4.jpg" alt="" height=400px width=950px/></div>
		<div class="item"><img src="img/img6.jpg" alt="" height=400px width=950px/></div>+
-->	</div>
  </div>

<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
    <div id="shout" class="clear">
      <div class="fl_left">
       <h2>Need A Professional Advertisement ?</h2>
        <p>Why not try our services today, you won't regret your choice !</p>
      </div>
<!--      <p class="fl_right"><a href="#contact">Contact Us Today</a></p>
-->    </div>
    <!-- ####################################################################################################### -->
    <div id="homepage" class="clear">
      <div class="fl_left">
        <h2>Latest Featured Project</h2>
        <div id="hpage_slider">
          <div class="item"><img src="img1/social.jpg" alt="" width="480" height="321"  /></div>
         <!-- <div class="item"><img src="img/images1.jpg" alt="" /></div>
          <div class="item"><img src="img/wpspin_light.gif" alt="" /></div>
          <div class="item"><img src="images/demo/featured-project/5.gif" alt="" /></div>
-->        </div>

</div>
<!--        <h2>Project Name Goes Here</h2>
        <p><strong>Project Type:</strong> <a href="#">Online Bnner Advertisement</a></p>
        <p>This is a W3C standards compliant free website template from <a href="http://www.os-templates.com/">OS Templates</a>. This template is distributed using a <a href="http://www.os-templates.com/template-terms">Website Template Licence</a>. You can use and modify the template for both personal and commercial use. You must keep all copyright information and credit links in the template and associated files. For more CSS templates visit <a href="http://www.os-templates.com/">Free Website Templates</a>.</p>
--><!--        <p class="readmore"><a href="#"><strong>View The Full Project &raquo;</strong></a></p>
-->      

      <div class="fl_right" style="margin-top:100px;">
	     <h2>Log In</h2>
	  <form method="post" name="LoginForm">
		<ul style="list-style:none;">
		<br />
		<li style="float:left; width:100px;">Email Id:</li>
		<li><input type="text" name="txtemail" value=""  /><br /><br /></li>
	
		<li style="float:left; width:100px;">Password:</li>
		<li><input type="password" name="txtpwd" value=""  /><br /><br />
		</li>
		  <a href="forgot_password.php" style="margin-left:135px; color:#0033FF;"> <u>Forgot Password?</u></a><br /><br />

	<input style="margin-left:180px;" type="submit" name="submit" value="submit" id="submit" />
	
</ul>
</form>

		<div style="height:100px; width:50px;"></div>
        <ul class="testimonials">
          
        </ul>
       <!-- <h2>Subscribe To Our Newsletter</h2>
        <p>Justoid nonummy laoreet phasellent penatoque in antesque pellus elis eget tincidunt. Nequatdui laorem justo a non tellus laoreet tincidunt ut vel velit.</p>-->
        <form action="#" method="post">
         
        </form>
      </div>
    </div>
    <!-- ####################################################################################################### --> 
  </div>
</div>
<!-- ####################################################################################################### -->

</body>
</html>
<?php
include("footer.php");
?>
