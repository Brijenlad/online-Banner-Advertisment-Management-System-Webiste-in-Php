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


<?php
	if(isset($_POST['submit']))
	{
		 $title=$_POST['txttitle'];
		 $detail=$_POST['txtdetail'];
		 $price=$_POST['txtprice'];
		 $filename=$_FILES['file']['name'];
  		 $filetype=$_FILES['file']['type'];		 
		 if($filetype=='image/jpeg' || $filetype=='image/png' || $filetype=='image/gif')
		{
			move_uploaded_file($_FILES['file']['tmp_name'],'upload/'.$filename);
			$filepath="upload/".$filename;
			$sql="INSERT INTO gallery (`gal_id`, `title`,`detail`, `image`,`price`) VALUES ('', '".$title."', '".$detail."', '".$filepath."','".$price."')";
			
			$res=mysql_query($sql);
			if(!$res)
			{
				die('Problem in query'.mysql_error());				
			}
			
		}		
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Gallery</title>
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
<div style="height:300px;">
<form name="gallery" method="post" onsubmit="return valid()" enctype="multipart/form-data">
<ul style="list-style:none;">
	<li style="float:left; width:100px;">Title :</li>
	<li><input type="text" name="txttitle" value="" /><br /><br /></li>
	
	<li style="float:left; width:100px;">Detail :</li>
	<li><textarea name="txtdetail" rows="5" cols="19" value="" /></textarea><br /><br /></li>
	<li style="float:left; width:100px;">Image:</li>
	
	<li><input type="file" name="file"/><br /><br /></li>
	<li style="float:left; width:100px;">Price :</li>
	<li><input type="text" name="txtprice" value="" /><br /><br /></li>
	
	<input type="submit" name="submit" value="submit" style="margin-left:180px;"/>
</ul>
</form>
</div>
</body>
</html>
<?php
include("footer1.php");
?>

