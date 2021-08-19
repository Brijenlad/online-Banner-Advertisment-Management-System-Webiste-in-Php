<?php
include('dbconnect.php');
session_start();
include('header1.php');

echo "<h1>Banner Approval Report </h1>";
$sql="select * from renew,banner,gallery where renew.ban_id=banner.ban_id and banner.gal_id=gallery.gal_id and renew.status='Approved'";
$result=mysql_query($sql);
$c=	$row=mysql_num_rows($result);
echo "<font Style='color:green; float:right;'><b>Total Approval Banner :".$c."</b></font>";

if(!$result)
{
	die("Error".mysql_error());
}
else
{
		echo "<table border=1><th style='background:black;color:white;'>Banner Id</th><th style='background:black;color:white;'>Banner Image</th><th style='background:black;color:white;'>Logo Image</th><th style='background:black;color:white;'>Title</th><th style='background:black;color:white;'>Height</th><th style='background:black;color:white;'>Width</th><th style='background:black;color:white;'>Layout</th><th style='background:black;color:white;'>Duration</th><th style='background:black;color:white;'>Link</th><th style='background:black;color:white;'>Content</th><th style='background:black;color:white;'>Address</th><th style='background:black;color:white;'>Price</th><th style='background:black;color:white;'>Status</th>";
	while($row=mysql_fetch_array($result))
	{
		$imgpath=$row['logo']; 
		$image=$row['image'];
		 echo "<tr><td>".$a=$row['ban_id']."</td>";	 
		 echo "<td><img src='$image' height='100' width='100'></td>";
		 echo "<td><img src='$imgpath' height='100' width='100'></td>"; 
		 echo "<td>".$b=$row['titlee']."</td>";
	 	 echo "<td>".$c=$row['height']."</td>";
		 echo "<td>".$d=$row['width']."</td>";
	 	 echo "<td>".$e=$row['layout']."</td>";
		 echo "<td>".$f=$row['duration']."</td>";
		 echo "<td>".$g=$row['link']."</td>";
		 echo "<td>".$h=$row['content']."</td>";
		 echo "<td>".$i=$row['address']."</td>";
		 echo "<td>".$j=$row['price']."</td>";	
		 echo "<td>".$k=$row['status']."</td></tr>";
		 	
	}
	echo "</table>";
	}


?>
