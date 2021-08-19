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
<title>Gallery</title>
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
    $("a[rel^='prettyPhoto']").prettyPhoto({
        theme: 'dark_rounded'
    });
});
</script>
<!-- prettyPhoto -->
<link rel="stylesheet" href="layout/scripts/prettyphoto/prettyPhoto.css" type="text/css" />
<script type="text/javascript" src="layout/scripts/prettyphoto/jquery.prettyPhoto.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $("a[rel^='prettyPhoto']").prettyPhoto({
        theme: 'dark_rounded',
        overlay_gallery: false,
        social_tools: false
    });
});
</script>
<!-- / prettyPhoto -->
</head>
<body id="top">
<div class="wrapper col1">
  <div id="topbar" class="clear">
    <ul>
      <li><a href="#">Libero</a></li>
      <li><a href="#">Maecenas</a></li>
      <li><a href="#">Mauris</a></li>
      <li class="last"><a href="#">Suspendisse</a></li>
    </ul>
    <form action="#" method="post" id="search">
      <fieldset>
        <legend>Site Search</legend>
        <input type="text" value="Search Our Website&hellip;" onfocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;" />
        <input type="image" id="go" src="images/search.gif" alt="Search" />
      </fieldset>
    </form>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="header" class="clear">
    <div class="fl_left">
      <h1><a href="user_home.php">Online Banner Advertise</a></h1>
     
    </div>
     <div id="topnav">
      <ul>
	  <li class="last"><a href="About.php">About Us</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="pages/pages/gallery.html">Gallery</a></li>
        
        <li><a href="complain.php">Complain</a></li>


        <li><a href="inquiry.php">Inquiry</a></li>
        <li><a href="Banner.php">Banner</a></li>
        <li class="active"><a href="user_home.php">Homepage</a></li>
      </ul>
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
    <div id="shout" class="clear">
      <div class="fl_left">
        <h2>Need A Professional Photographer ?</h2>
        <p>Why not try our services today, you won't regret your choice !</p>
      </div>
      <p class="fl_right"><a href="contact.php">Contact Us Today</a></p>
    </div>
    <!-- ####################################################################################################### -->
    <h1>Gallery Category Name Here</h1>
    <div class="gallery clear">
      <ul>
       <li class="first"><img src="img1/1.jpg" alt="Title Text" title="Image 11111"/></li>
        <li><a href="img1/10.jpg" rel="prettyPhoto[gallery1]" title="Image 1" ><img src="img1/10.jpg" height="164" width="200px" /></a></li>
        <li><a href="img1/2.jpg" rel="prettyPhoto[gallery1]" title="Image 2"><img src="img1/2.jpg" alt="Title Text" height="500px" width="500px" /></a></li>
        <li><a href="img1/r.jpg" rel="prettyPhoto[gallery1]" title="Image 3"><img src="img1/r.jpg" alt="Title Text" height="500px" width="500px" /></a></li>
        <li><a href="img1/m.jpg" rel="prettyPhoto[gallery1]" title="Image 4"><img src="img1/m.jpg" alt="Title Text"  height="194" width="259"/></a></li>
        <li class="first"><a href="img1/10.jpg" rel="prettyPhoto[gallery1]" title="Image 5"><img src="img1/10.jpg" alt="Title Text" /></a></li>
        <li><a href="img1/index.jpg" rel="prettyPhoto[gallery1]" title="Image 6"><img src="img1/index.jpg" alt="Title Text" /></a></li>
        <li><a href="img1/8.jpg" rel="prettyPhoto[gallery1]" title="Image 7"><img src="img1/8.jpg" alt="Title Text" /></a></li>
        <li><a href="img1/a.jpg" rel="prettyPhoto[gallery1]" title="Image 8"><img src="img1/a.jpg" alt="Title Text" /></a></li>
        <li><a href="img1/r.jpg" rel="prettyPhoto[gallery1]" title="Image 9"><img src="img1/r.jpg" alt="Title Text" /></a></li>
        <li class="first"><a href="img1/p.jpg" rel="prettyPhoto[gallery1]" title="Image 10"><img src="img1/p.jpg" alt="Title Text" /></a></li>
        <li><a href="img1/imagesv1.jpg" rel="prettyPhoto[gallery1]" title="Image 11"><img src="img1/imagesv1.jpg" alt="Title Text" /></a></li>
        <li><a href="img1/img.jpg" rel="prettyPhoto[gallery1]" title="Image 12"><img src="img1/img.jpg" alt="Title Text" /></a></li>
        <li><a href="img1/11.jpg" rel="prettyPhoto[gallery1]" title="Image 13"><img src="img1/11.jpg" alt="Title Text" /></a></li>
        <li><a href="img1/t.jpg" rel="prettyPhoto[gallery1]" title="Image 14"><img src="img1/t.jpg" alt="Title Text" /></a></li>
      </ul>
    </div>
    <!-- ####################################################################################################### -->
    
    <!-- ####################################################################################################### -->
    <div class="clear"></div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2020 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
  </div>
</div>
</body>
</html>