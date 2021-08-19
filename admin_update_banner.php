<?php
include("dbconnect.php");
session_start();


include("header1.php");

$a=$_GET["bid"];
$sql="select * from gallery where gal_id='".$a."'";
$res=mysql_query($sql);
if(!$res)
{
		die("could not connect".mysql_error());
}
else
{
			while($row=mysql_fetch_array($res))
			{
				 $a=$row["title"];
				 $b=$row["detail"];
				 $c=$row["image"];
				 $d=$row["price"];
				 $im="<img src='$c' height='150' width='150'>&nbsp;";
							  
			}
}

?>
<html>
<head>
<script type="text/javascript">

	function valid()
	{
			var t=document.gallery.txttitle.value;
			var b=document.gallery.txtdetail.value;
			var p=document.gallery.txtprice.value;
			
			var extensions = new Array("jpg","jpeg","gif","png","bmp");
			var file = document.gallery.file.value; 
			var image_length = document.gallery.file.value.length; 
			var pos = file.lastIndexOf('.') + 1; 
			var ext = file.substring(pos, image_length); 
			var final_ext = ext.toLowerCase();
		
			if(t=="")
			{
				alert("Please Enter the Title");
				document.gallery.txttitle.focus();
				return false;
			}
					
			if(b=="")
			{
				alert("Please Enter Your Detail");
				document.gallery.txtdetail.focus();
				return false;
			}
			if(file=="")
			{
				alert("Please Select Your Image File");
				document.gallery.file.focus();
				return false;
			}
			else
			{
				for (i = 0; i < extensions.length; i++)
				{
					if(extensions[i] == final_ext)
					{
						return true;
					}
				}	
				alert("You must upload an image with one of the following extensions: "+ extensions.join(', ') +".");
				return false;			
			}
			if(p=="")
			{
				alert("Please Enter the Price");
				document.gallery.txtprice.focus();
				return false;
			}
			if(isNaN(p))
			{
				alert("Please Enter the  Number Only");
				document.gallery.txtprice.focus();
				return false;
			}
	}
</script>
	
</head>

<body>
<div>
<form name="gallery" method="post" onsubmit="return valid()" enctype="multipart/form-data">
<ul style="list-style:none;">
	<li style="float:left; width:100px;">Title :</li>
	<li><input type="text" name="txttitle" value="<?php echo $a; ?>" /><br /><br /></li>
	
	<li style="float:left; width:100px;">Detail :</li>
	<li><textarea name="txtdetail" rows="5" cols="19" /><?php echo $b; ?></textarea><br /><br /></li>
	<li style="float:left; width:100px;">Image:</li>
	
	<li><?php echo $im; ?><br><br><input type="file" name="file" style="margin-left:100px;"><br /><br /></li>
	<li style="float:left; width:100px;">Price :</li>
	<li><input type="text" name="txtprice" value="<?php echo $d; ?>" /><br /><br /></li>
	
	<input type="submit" name="submit" value="submit" style="margin-left:180px;"/>
</ul>
</form>
</div>
</form>
</body>
</html>
<?php
		if(isset($_POST["submit"]))
		{
				$a=$_GET["bid"];
				$b=$_POST["txttitle"];
				$c=$_POST["txtdetail"];
				$e=$_POST["txtprice"];
				$filename=$_FILES['file']['name'];
				$filetype=$_FILES['file']['type'];		 
				if($filetype=='image/jpeg' || $filetype=='image/png' || $filetype=='image/gif')
				{
					move_uploaded_file($_FILES['file']['tmp_name'],'upload/'.$filename);
					$filepath="upload/".$filename;
				$a;	
				$sql="UPDATE gallery SET title='".$b."',detail='".$c."',image='".$filepath."',price='".$e."' where gal_id='".$a."'";
				$res=mysql_query($sql);
				if(!$res)
				{
						die("Not updated".mysql_error());
				}
				else
				{
						$msg="Update Sucessfully.....";
						header("location:admin_home2.php?msg_d=$msg");
				}
			}
		}
?>
<?php

include("footer1.php");
?>