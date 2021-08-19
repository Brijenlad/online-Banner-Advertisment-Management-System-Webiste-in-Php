
<?php

include('dbconnect.php');
session_start();
include('header1.php');

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Online banner Advertisement</title>
 <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
<script>

  $(function() {
    $( "#datepicker" ).datepicker({dateFormat: 'yy/mm/dd',});
	 
  });
 
  </script>


<script>

	function valid()
	{
	
		var d=document.form.datepicker.value;
		if(d=="")
		{
			alert('please Select date');
			return false;
		}
	}
	
	

</script>

</head>

<body>	
<h1>Selected Date Report </h1>

<form name="form" method="post" onsubmit="return valid();">
Choose Date : <input type="text" id="datepicker" name="date">
<input type="submit" name="submit" value="submit" />

</form>
<?php
if(isset($_POST['submit']))
{
	 $d=$_POST['date'];
 	//$sql="select * from banner where date='".$d."'";
	$sql="select * ,gallery.image from banner,gallery where banner.gal_id=gallery.gal_id and date='".$d."'";
//	exit;
	$res=mysql_query($sql);	
	if(!$res)
	{
		die('Error'.mysql_error());
	}
	else
	{
		echo "<table border=1><th style='background:black;color:white;'>Banner Id</th><th style='background:black;color:white;'>Banner Image</th><th style='background:black;color:white;'>Logo Image</th><th style='background:black;color:white;'>Title</th><th style='background:black;color:white;'>Height</th><th style='background:black;color:white;'>Width</th><th style='background:black;color:white;'>Layout</th><th style='background:black;color:white;'>Duration</th><th style='background:black;color:white;'>Link</th><th style='background:black;color:white;'>Content</th><th style='background:black;color:white;'>Address</th><th style='background:black;color:white;'>Price</th>";
		while($row=mysql_fetch_array($res))
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
		 echo "<td>".$j=$row['price']."</td></tr>";	
	
		}
		echo "</table>";
	}
	
}
?>	


</body>
</html>
<?php

include('footer1.php');

?>