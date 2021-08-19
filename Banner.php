<?php
include('dbconnect.php');
session_start();
	global $_SESSION;

	if(!isset($_SESSION["email"]))
	{		
		header("location:index.php");
	}
include("header.php");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Banner</title>
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
<h1>&nbsp;&nbsp;Order Banner</h1>
<div class="gallery clear">
      <ul>
       <li>
	   <table border=1>
	   
	<?php
		$sql="select * from gallery";
		$rdata=mysql_query($sql);
		while($res=mysql_fetch_array($rdata))
		{
			$id=$res['gal_id'];
			$title=$res['title'];
			$detail=$res['detail'];		
			$imgpath=$res['image'];
			$price=$res['price'];
			echo "<tr ><td><a href='$imgpath' rel='prettyPhoto[gallery]' title='Click to zoom' ><img rel='prettyPhoto[gallery1]' src='$imgpath'></a>&nbsp</td>";
			echo "<td><br><br><font size=+1 style='margin-left:20px;' color=red> Id : ".$id."</font><br>";
			echo "<font size=+1 style='margin-left:20px;' color=blue>Name :".$title."</font><br>";
			echo "<font size=+1 style='margin-left:20px;' color=black>Detail :".$detail."</font><br>";
			echo "<br><font size=+1 style='margin-left:20px;' color=green>Price :".$price."/month</font><br>";
			echo "<br><a style='margin-left:20px;' href='checkout.php?bid=$res[gal_id]&p=$res[price]'><b><u>Click to Select</u></b></a></font></td></tr>";
		}
		
		?>
		</table>
	  </li>
      </ul>
    </div>

</body>
</html>



<?php
include("footer.php");
?>