<?php

include('dbconnect.php');
session_start();

include("header.php");
global $_SESSION;
$r=$_SESSION['reg_id'];
$u=$_SESSION['email'];


if(!isset($_SESSION["email"]))
	{		
		header("location:index.php");
	}
	
	
$sql="select * ,gallery.image from banner,gallery where reg_id='".$r."' and gallery.gal_id=banner.gal_id order by ban_id ASC";
$res=mysql_query($sql);
if(!$res)
{
	die("Problem".mysql_error());
}	
else
{

?>

<html>
<body>
<h1>&nbsp;&nbsp;Renew Your Banner</h1>

<form name='form' method='post'>

<?php
	echo "<table border='1' >";
	echo "<th style='background:black;color:white;'>Banner Id</th><th style='background:black;color:white;'>Banner Image</th><th style='background:black;color:white;'>Logo Image</th><th style='background:black;color:white;'>Title</th><th style='background:black;color:white;'>Height</th><th style='background:black;color:white;'>Width</th><th style='background:black;color:white;'>Layout</th><th style='background:black;color:white;'>Duration</th><th style='background:black;color:white;'>Link</th><th style='background:black;color:white;'>Content</th><th style='background:black;color:white;'>Address</th><th style='background:black;color:white;'>Price</th><th style='background:black;color:white;'>Renew</th>";
	while($row=mysql_fetch_array($res))
	{
				$image=$row['image'];
				$id=$row['ban_id'];
				$title=$row['titlee'];
				$imgpath=$row['logo'];
				$h=$row['height'];
				$w=$row['width'];
				$l=$row['layout'];
				$d=$row['duration'];
				$lk=$row['link'];
				$c=$row['content'];
				$a=$row['address'];
				$p=$row['price'];
			//	$k=$p/$d;
				//echo $k;
				
				echo "<tr><td>$id</td>";
				echo "<td><img src='$image' height='50' width='50'></a></td>";
				
				echo "<td><img src='$imgpath' height='50' width='50'></a>&nbsp;</td>";
				
				echo "<td>$title</td>";
				echo "<td>$h</td>";
				echo "<td>$w</td>";
				echo "<td>$l</td>";
				echo "<td>$d</td>";
				echo "<td>$lk</td>";
				echo "<td>$c</td>";
				echo "<td>$a</td>";
				echo "<td>$p</td>";
				echo "<td ><a  href='renew_update.php?id=$id&dur=$d' style='color:blue'>Click Here</a></td></tr>";
				
	}
	echo "</table>";
}	
?>

</form>
</body>
</html>
<!--<a href='renew_update.php?id=$id&d=$d' style='color:blue'>Click Here</a>
-->
