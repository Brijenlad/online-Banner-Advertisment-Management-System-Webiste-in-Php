<?php
include('dbconnect.php');
	session_start();
	global $_SESSION;

	if(!isset($_SESSION["email"]))
	{
		
		header("location:index.php");
	}
	
	
	
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
<title>Online Banner Advertisement</title>
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
    <ul>
      <li style="color:BLUE;">Welcome : <?php echo $_SESSION["email"]; ?></li>  
	  <li class="last"><a style="color:#FF3300; right:100px;" href="Logout.php"><b> &nbsp;Logout  </b></a></li>
	  </ul>
    <form id="search">
      
	  <ul >
			<li><a href="About.php" style="color:white;">ABOUT US</a><span></span></li>     
	    <li><a href="contact.php" style="color:white;">CONTACT US</a><span></span></li>
   		</ul>
      
    </form>
  </div>
</div>

<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="header" class="clear">
    <div class="fl_left">
      <h1><a href="user_home.php">ONLINE BANNER ADVERTISMENT</a></h1>
      
    </div>
    <div id="topnav">
      <ul>
        <li class="last"><a href="renew_home.php">Renew</a><span></span></li>
      
      <li><a href="complain.php">Complain</a><span></span></li>	
		 <li><a href="Inquiry.php">Inquiry</a><span></span></li>
		<li><a href="Banner.php">Order&nbsp; Banner</a><span></span></li>
		<li><a href="gallery.php">Gallery</a><span></span></li>
        <li class="active"><a href="user_home.php">Homepage</a><span></span></li>
      </ul>
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3"  class="clear" >
<div  style="width:300px; margin-left:200px">
  <div > 
        <div id="hpage_slider" style="height:300px ; list-style:none;">
          <div class="item"><img src="img1/developmet.jpg" alt="" height=400px width=950px/></div>
          <div class="item"><img src="img1/Advocate1.jpg" alt="" height=400px width=950px/></div>
          <div class="item"><img src="img1/ba.jpg" alt="" height=400px width=950px/></div>
          <div class="item"><img src="img1/s4.jpg" alt="" height=400px width=950px/></div>
		  <div class="item"><img src="img1/i-marketing.jpg" alt="" height=400px width=950px/></div>
        </div>
  </div>
  
    <!-- ####################################################################################################### -->
    <div ><img src="" alt="" /></div>
    <!-- ####################################################################################################### --> 
  </div>
  </
</div>

<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
    <div id="shout" class="clear">
      <div class="fl_left">
        <h2>Need A Professional Advertiser ?</h2>
        <p>Why not try our services today, you won't regret your choice !</p>
      </div>
<!--      <p class="fl_right"><a href="#contact">Contact Us Today</a></p>
-->    </div>
    <!-- ####################################################################################################### -->
    <div id="homepage" class="clear">
      <div class="fl_left">
        <h2>Latest Featured Project</h2>
        <div id="hpage_slider">
           <div class="item"><img src="img1/Online-Advertising-banner logo.jpg" alt="" width="473" height="318" /></div>
        </div>
        <h2>Project Name Goes Here</h2>
        <p><strong>Project Type:</strong> <a href="#"> Online Banner Advertisement Management System</a></p>
        <p>
                    We are doing a project named “ONLINE ADVERTISING AGENCY” The project has maintained all types of information of the exam report information
.</p>
        
      </div>
      <div class="fl_right">
        <h2>What People Say About Us</h2>
        <ul class="testimonials">
          <li>
            <p class="name"><strong>Client Name</strong> - CEO</p>
            <blockquote>The Online Advertising Agency is to automate all operation . generally it includes the order processing,  Reservation management and Schedule management. before automating Reservation we have to understand the concept of Online Advertising Agency. Of any operation we make a system which do work automatically as the respective events occurs, for which it is meant. These are best examples of the management system.
          </li>
          <li class="last">
            <p class="name"><strong>Client Name</strong> - CEO</p>
            <blockquote>Justoid nonummy laoreet phasellent penatoque in antesque pellus elis eget tincidunt. Nequatdui laorem justo a non tellus laoreet tincidunt ut vel velit. Idenim semper pellente velis felit ac nullam pretium morbi lacus.</blockquote>
           
          </li>
        </ul>
        <h2>Subscribe To Our Newsletter</h2>
        <p><div class="item"><img src="img1/p2.jpg" alt="" /></div></p>
        
        
      </div>
    </div>
    <!-- ####################################################################################################### --> 
  </div>
</div>


</body>
</html>
<?php
include("footer.php");
?>