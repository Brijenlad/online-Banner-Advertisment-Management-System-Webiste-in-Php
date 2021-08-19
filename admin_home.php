<?php
include('dbconnect.php');
global $_SESSION;

session_start();

if(!isset($_SESSION["email"]))
	{		
		header("location:index.php");
	}
include("header1.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Gallery</title>
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
</head>
<body>
<div class="gallery clear">
<a href="admin_home2.php" style="color:blue;" ><u>View Banner Detail</u></a>
	<br></br>
      <ul>
       <li>
	<?php
		$sql="select * from gallery";
		$rdata=mysql_query($sql);
		while($res=mysql_fetch_array($rdata))
		{
			$imgpath=$res['image'];
			echo "<a href='$imgpath' rel='prettyPhoto[gallery]' ><img rel='prettyPhoto[gallery1]' src='$imgpath' height='50' width='50'></a>&nbsp;";
			
		}		
		?>
	  </li>
      </ul>
    </div>
</body>
</html>
<?php
include("footer1.php");
?>