<?php
include('dbconnect.php');
session_start();
include('header.php');
$gid=$_GET['gal_id'];
$regid=$_SESSION['reg_id'];	
$sql="select * from banner,gallery where reg_id='".$regid."' and gallery.gal_id=banner.gal_id and banner.gal_id='".$gid."'";
$result=mysql_query($sql);
?>
<html>
<body>
<?php	
?>
<table> 
<?php

while($row=mysql_fetch_array($result))
{
	 $m=$row['gal_id'];
	 $a=$row['ban_id'];	 
	 $k=$row['image'];
	 $l=$row['logo']; 
	 $b=$row['titlee'];
	 $c=$row['height'];
	 $d=$row['width'];
	 $e=$row['layout'];
	 $f=$row['duration'];
	 $g=$row['link'];
	 $h=$row['content'];
	 $i=$row['address'];
	 $j=$row['price'];	
	 $p1=$_GET['p'];
	 $x=$p1*$f;	

		echo "<tr><td width=120></td><td><a href='confirm.php'><font size='4'>Confirm Order</font></a><a href='cancel_order.php?cn=$a'><font size='4' >Cancel Order</font></a> </td></tr>";

	 echo "<tr><td width=120>Gallery Id :</td> <td>".$m."</td></tr>";
	
	echo "<tr><td width=120>Your Banner Id :</td> <td>".$a."</td></tr>";
	echo "<tr><td>Banner Image : </td><td><img src='$k' height='100' width='100'></td></tr>";
	echo "<tr><td>Logo Image : </td><td><img src='$l' height='100' width='100'></td></tr>";	
	echo "<tr><td>Title : </td> <td>".$b."</td></tr>";
	echo "<tr><td>Height : </td> <td>".$c."</td></tr>";
	echo "<tr><td>Width : </td> <td>".$d."</td></tr>";
	echo "<tr><td>Layout : </td> <td>".$e."</td></tr>";
	echo "<tr><td>Duration : </td> <td>".$f."</td></tr>";
	echo "<tr><td>Link : </td> <td>".$g."</td></tr>";
	echo "<tr><td>Content : </td> <td>".$h."</td></tr>";
	echo "<tr><td>Address : </td> <td>".$i."</td></tr>";
	echo "<tr><td>Price : </td> <td>".$x."</td></tr>";

	
}
?>

</table>
</body>
</html>