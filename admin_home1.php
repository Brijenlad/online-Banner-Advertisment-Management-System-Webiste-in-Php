<?php
include('dbconnect.php');
	session_start();
	global $_SESSION;
$_SESSION["email"];
if(!isset($_SESSION["email"]))
	{
		
		header("location:index.php");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Home</title>
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css"  />
<script type="text/javascript" src="layout/scripts/jquery.min.js" ></script>
<script type="text/javascript" src="layout/scripts/jquery.ui.min.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.defaultvalue.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.scrollTo-min.js"></script>
<script type="text/javascript">
</script>
</head>

<body>
<br><div>
Welcome : <?php echo $_SESSION["email"]; ?> 
<a style="color:#FF3300; right:100px;" href="Logout.php"><b> &nbsp;Logout  </b></a>

</div>
<div style="background-color:#CCCC66; height:150px;">


<div class="wrapper col2" style="background-color:#CCCC66">
  <div id="header" class="clear">
    <div class="fl_left" >
      <h1><a href="admin_home1.php" >Online Banner Advertise</a></h1>
      
    </div>
    <div id="topnav">
      <ul>
        </li>

		<!-- <li><a href="About.php" style="font-size:18px" >About Us</a></li>-->
        <li><a href="contact.php" style="font-size:18px">Contact Us</a></li>
        <li><a href="pages/gallery.htm;"style="font-size:18px">Gallery</a></li>
        <li><a href="Banner.php" style="font-size:18px">Banner</a></li>
        <li class="active"><a href="admin_home1.php" style="font-size:18px">Homepage</a></li>
      </ul>
    </div>
  </div>
</div>
</div>
<div style="background-color:#FFFF99; height:40px;">
<div id="topnav" style="float:left">
      <ul>
       
        
          
        

		<!-- <li><a href="About.php" style="font-size:18px" >About Us</a></li>
        <li><a href="contact.php" style="font-size:18px">Contact Us</a></li>-->
       
	    <li><a href="admin_contact.php"style="font-size:18px">Contact</a></li>
        <li><a href="admin_delete.php" style="font-size:18px">Inquiry</a></li>
        <li><a href="complian_delete.php" style="font-size:18px">Complain</a></li>
      
	  </ul>
  </div>
	
	
	
	
	
	
	
	

<!--<li><a href="image_delete.php" style="font-size:18px"  >Gallery</a></li>
        <li><a href="inquiry_delete.php" style="font-size:18px">Inquiry</a></li>
        <li><a href="complain_delete.php"style="font-size:18px">complain</a></li>-->
</div>
<div  style="background-color:#CC3366; height:40px;">
<ul><marquee direction="left" onmouseover="this.stop();" onmouseout="this.start();">
								<li><h4>Albucius moderatius contentiones pri in, ei tota brute eam Albucius moderatius contentiones pri in, ei tota brute eam Albucius moderatius contentiones pri in, ei tota brute eam</a></h4><i class="fa fa-exclamation"></i></li></marquee>
  </ul>
</div>
</ul>
<div style="height:450px; width:1200px; background-color:#CCCCCC; margin-left:150px;">
        <center><img src="img1/pk.png" height="173" width="382" align="absmiddle" /></center>
      </div>
	 
	  </div>
	  </div>
    

    <!-- ####################################################################################################### -->
<?php
include("admin_footer.php"); 
?>

</body>
</script>


</html>
