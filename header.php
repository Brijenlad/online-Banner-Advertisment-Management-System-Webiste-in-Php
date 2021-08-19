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
      <li style="color:white;">Welcome : <?php if(isset($_SESSION['email'])){echo $_SESSION["email"];} else { } ?></li>  
	  <li class="last"><a style="color:#FF3300; right:100px;" href="Logout.php"><b> &nbsp;Logout  </b></a></li>
	  </ul>
    <form id="search">
      
	  <ul>
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
      <h1><a href="user_home.php">Online Banner Advertisement</a></h1>      
    </div>
    <div id="topnav">
      <ul>
        <li class="last"><a href="renew_home.php">Renew</a><span></span></li>
      
      <li><a href="complain.php">Complain</a><span></span></li>	
		 <li><a href="Inquiry.php">Inquiry</a><span></span></li>
		<li><a href="Banner.php">Order Banner</a><span></span></li>
		<li><a href="gallery.php">Gallery</a><span></span></li>
        <li ><a href="user_home.php">Homepage</a><span></span></li>
      </ul>
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
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
      <!--<p class="fl_right"><a href="contact.php">Contact Us Today</a></p>-->
    </div>