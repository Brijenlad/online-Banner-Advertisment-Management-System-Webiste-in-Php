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
<title>PhotoProwess</title>
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
      <h1><a href="index.php">PhotoProwess</a></h1>
      <p>Free Website Template</p>
    </div>
    <div id="topnav">
      <ul>
        <li class="last"><a href="pages/gallery.php">Gallery</a><span>Test Text Here</span></li>
        <li><a href="pages/portfolio.html">Portfolio</a><span>Test Text Here</span></li>
        <li><a href="#">DropDown</a><span>Test Text Here</span>
          <ul>
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
            <li><a href="#">Link 3</a></li>
          </ul>
        </li>
        <li><a href="pages/full-width.html">Full Width</a><span>Test Text Here</span></li>
        <li><a href="pages/style-demo.html">Style Demo</a><span>Test Text Here</span></li>
        <li class="active"><a href="index.php">Homepage</a><span>Test Text Here</span></li>
      </ul>
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3"></div>
<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
    <div id="shout" class="clear">
      <p class="fl_left"><a href="#contact">Contact Us Today</a></p>
    </div>
    <!-- ####################################################################################################### -->
    <div id="homepage" class="clear"><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Complain</title>


<script type="text/javascript">


	function valid()
	{
		var ctitle;
		var detail;
		ctitle=document.complain.txttitle.value;
		detail=document.complain.txtdesc.value;
		
		if(ctitle=="")   //title
		{
			alert("Title can not be blank");
			document.complain.txttitle.focus();

		}
		if(detail=="")   //description
		{
			alert("Enter Detail");
			document.complain.txtdesc.focus();

		}
	
	
	}
</script>
</head>

<body>
<div style="height:500px; width:500px; margin-left:500px;">
<form name="complain" method="post">
<ul style="list-style:none;">
<br /><br />
	<li style="float:left; width:100px;">Title:</li>
	<li><input type="text" name="txttitle" value="" /></li>
	
	<li style="float:left; width:100px;">Description:</li>
	<li><textarea rows="3" cols="20" name="txtdesc"> </textarea></li>
	<input type="submit" name="submit" value="submit" onclick="valid();"/>
</ul>
</form>
</div>
</body>
</html>

<?php

include('dbconnect.php');

if(isset($_POST['submit']))
{			
	$title=$_POST['txttitle'];
	$desc=$_POST['txtdesc'];
	
	if(isset($_POST['submit']))
	{
		$sql="insert into complain(title,desc) values ('$title','$desc')";
		$res=mysql_query($sql);
		
		if(!$res)
		{
			die("Could Not Execute Query".mysql_error());
		}
		else
		{
			header("location:Login.php");
		
		}	
	
	}
}
?>
</div>
    <!-- ####################################################################################################### --> 
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="footer" class="clear">
    <div class="fl_left">
      <div class="about_us border">
        <h2>About Us</h2>
        <p>Sednulla nam nibh a nibh eu urna facinia mauristibulus sit urna. Vitaerisus lobortis proin elit et curabituris elit estibulum cursus iacus orci. Dignissimmorbi rhoncus sed netus ligula conseque netus nulla aliquat id dui. Ipsumintesque venean hendiment enim nis maecenas justo justo vitae purus sed. Rutrumcondimentumsan elit.</p>
      </div>
      <div id="contact" class="clear">
        <h2>Contact Us</h2>
        <div class="fl_left">
          <form method="post" action="#">
            <label for="fullname">Name:</label>
            <input type="text" name="fullname" id="fullname" value="" />
            <label for="validemail">Email:</label>
            <input type="text" name="validemail" id="validemail" value="" />
            <label for="message">Message:</label>
            <textarea name="message" id="message" cols="45" rows="10"></textarea>
            <button type="submit" value="submit"><span>Submit</span></button>
          </form>
        </div>
        <div class="fl_right">
          <address>
          <strong class="title">Company Name</strong><br />
          Street Name &amp; Number<br />
          Town<br />
          Postcode/Zip
          </address>
          <ul>
            <li><strong class="title">Tel:</strong><br />
              xxxxx xxxxxxxxxx</li>
            <li><strong class="title">Fax:</strong><br />
              xxxxx xxxxxxxxxx</li>
            <li><strong class="title">Email:</strong><br />
              <a href="#">contact@mydomain.com</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- ####################################################################################################### -->
    <div class="fl_right">
      <div id="tabcontainer" class="border">
        <ul id="tabnav">
          <li><a href="#tabs-1">From The Blog</a></li>
          <li><a href="#tabs-2">Latest Tweets</a></li>
          <li class="last"><a href="#tabs-3">Interesting Links</a></li>
        </ul>
        <div id="tabs-1" class="tabcontainer">
          <ul class="blogposts">
            <li>
              <p class="posttitle">Justoid nonummy laoreet phasellent</p>
              <p class="publishedon">Published on 01 Jan 2042, by Username</p>
              <p class="postintro">Miet gravida nulla at augue curabitae faucibulum nulla curabitur consectetus dolorem. Ametuervestibus nam nibh laculis vivamus suscinia masse convallis sollis quam males.</p>
              <p class="readmore"><a href="#">Read More &raquo;</a></p>
            </li>
            <li class="last">
              <p class="posttitle">Justoid nonummy laoreet phasellent</p>
              <p class="publishedon">Published on 01 Jan 2042, by Username</p>
              <p class="postintro">Miet gravida nulla at augue curabitae faucibulum nulla curabitur consectetus dolorem. Ametuervestibus nam nibh laculis vivamus suscinia masse convallis sollis quam males.</p>
              <p class="readmore"><a href="#">Read More &raquo;</a></p>
            </li>
          </ul>
        </div>
        <!-- ########### -->
        <div id="tabs-2" class="tabcontainer">
          <ul class="twitterfeed">
            <li><a href="#">@namehere</a> Justoid nonummy laoreet phasellent penatoque in antesque pellus elis eget tincidunt. Nequatdui laorem justo a non tellus laoreet tincidunt ut vel velit. <span>1 day ago</span></li>
            <li><a href="#">@namehere</a> Justoid nonummy laoreet phasellent penatoque in antesque pellus elis eget tincidunt. Nequatdui laorem justo a non tellus laoreet tincidunt ut vel velit. <span>1 day ago</span></li>
            <li><a href="#">@namehere</a> Justoid nonummy laoreet phasellent penatoque in antesque pellus elis eget tincidunt. Nequatdui laorem justo a non tellus laoreet tincidunt ut vel velit. <span>1 day ago</span></li>
            <li class="last"><a href="#">@namehere</a> Justoid nonummy laoreet phasellent penatoque in antesque pellus elis eget tincidunt. Nequatdui laorem justo a non tellus laoreet tincidunt ut vel velit. <span>1 day ago</span></li>
          </ul>
        </div>
        <!-- ########### -->
        <div id="tabs-3" class="tabcontainer">
          <ul>
            <li><a href="#">Lorem ipsum dolor sit</a></li>
            <li><a href="#">Amet consectetur</a></li>
            <li><a href="#">Praesent vel sem id</a></li>
            <li><a href="#">Curabitur hendrerit est</a></li>
            <li><a href="#">Aliquam eget erat nec sapien</a></li>
            <li><a href="#">Cras id augue nunc</a></li>
            <li><a href="#">In nec justo non</a></li>
            <li><a href="#">Vivamus mollis enim ut</a></li>
            <li class="last"><a href="#">Sed a nulla urna</a></li>
          </ul>
        </div>
      </div>
      <h2>Keep Up To Date</h2>
      <ul class="socialize">
        <li><span>Facebook:</span> <a href="#">www.facebook.com/myhandel</a></li>
        <li><span>Twitter:</span> <a href="#">www.twitter.com/myhandel</a></li>
        <li class="last"><span>LinkedIn:</span> <a href="#">www.linkedin.com/myhandel</a></li>
      </ul>
    </div>
  </div>
  <div id="backtotop"><a href="#top" class="topOfPage">To The Top</a></div>
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