<?php

include('dbconnect.php');
session_start();

global $_SESSION;

include('header.php');
 $id=$_GET['id'];
 $d=$_GET['dur'];
 $r=$_SESSION['reg_id'];

$sql="select * from banner where ban_id='".$id."'";
//$sql="select * from banner,gallery where reg_id='".$r."' and banner.gal_id=gallery.gal_id";

$sql="select * ,gallery.image from banner,gallery where reg_id='".$r."' and gallery.gal_id=banner.gal_id and banner.ban_id='".$id."'";

$res=mysql_query($sql);
if(!$res)
{
	die("Problem".mysql_error());
}	
else
{

?>

<html>

<head>
<script type="text/javascript">

function valid()
{
	var a=document.form.duration.value;
	
	if(a=="")
	{
		alert("Please Select Your Duration");
		document.form.duration.focus();
		return false;
	}
}

</script
></head>


<body>
<form name='form' method='post' onSubmit="return valid()">

<?php
	echo "<table border='1'>";
	echo "<th style='background:black;color:white;'>Banner Image</th><th style='background:black;color:white;'>Logo Image</th><th style='background:black;color:white;'>Title</th><th style='background:black;color:white;'>Height</th><th style='background:black;color:white;'>Width</th><th style='background:black;color:white;'>Layout</th><th style='background:black;color:white;'>Duration</th><th style='background:black;color:white;'>Link</th><th style='background:black;color:white;'>Content</th><th style='background:black;color:white;'>Address</th><th style='background:black;color:white;'>Price</th>";
	while($row=mysql_fetch_array($res))
	{
				
				$id=$row['ban_id'];
				$t=$row['titlee'];
				$g=$row['image'];				
				$imgpath=$row['logo'];
				$h=$row['height'];
				$w=$row['width'];
				$l=$row['layout'];
				$d=$row['duration'];
				$lk=$row['link'];
				$c=$row['content'];
				$a=$row['address'];
				$p=$row['price'];
				
		
				echo "<tr style='background:white; color:black;'><td><img src='$g' height='50' width='50'></a>&nbsp;</td>";

				echo "<td><img src='$imgpath' height='50' width='50'></a>&nbsp;</td>";
			
				echo "<td>$t</td>";
				echo "<td>$h</td>";
				echo "<td>$w</td>";
				echo "<td>$l</td>";
				echo "<td>$d</td>";
				echo "<td>$lk</td>";
				echo "<td>$c</td>";
				echo "<td>$a</td>";
				echo "<td>$p</td>";
				echo "</tr>";
				
				
	}
	echo "</table>";
}	
if(isset($_POST['submit']))
{
	 $id=$_GET['id'];
	 $rid=$_SESSION['reg_id'];
 	 $v=$_POST['duration'];
	$f=$p*$v;

	//$c=date();
//	echo $c;
//echo	$sql1="Insert into renew ('reg_id','ban_id','duration','time') values ('".$rid."','".$id."','".$v."','00')";
		$sql1="INSERT INTO `renew` ( `reg_id`, `ban_id`, `duration`, `time`,`price`,`status`) VALUES ( '".$rid."', '".$id."', '".$v."', '00','".$f."','waiting')";
		
	$res1=mysql_query($sql1);
	echo "<script>alert('Your Request have been submitted, Please Wait for approval.'); </script>";
	
	if(!$res1)
	{
		die('could not execute'.mysql_error());
	}
}

?><br>
Select Your Renewal Duration :<select name='duration' id='duration'>
			<option value=''>----Select----</option>
			<option value='3'>3 Months</option>
			<option value='6'>6 Months</option>
			<option value='12'>12 Months</option>
		</select><br><br><input type="submit" name="submit" value="submit">
</form>
</body>
</html>

<?php
 include('footer.php');
?>