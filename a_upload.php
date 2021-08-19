
<?php
if(isset($_POST['submit']))
{ 
	
 mysql_connect("localhost","root","") or die("ERROR:Connection lost");
   mysql_select_db('advertise');
	$filename=$_FILES['image_file']['name'];
 
   $filetype=$_FILES['image_file']['type'];
if($filetype=='image/jpeg' or $filetype=='image/png' or $filetype=='image/gif')
{
move_uploaded_file($_FILES['image_file']['tmp_name'],'upload/'.$filename);
$filepath="upload/".$filename;
$sql="insert into test_image1(image) values('$filepath')";
mysql_query($sql);
header("location:u_upload.php");
}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script>
function validate()
{
	var extensions = new Array("jpg","jpeg","gif","png","bmp");
	var image_file = document.form.image_file.value; 
	var image_length = document.form.image_file.value.length; 
	var pos = image_file.lastIndexOf('.') + 1; 
	var ext = image_file.substring(pos, image_length); 
	var final_ext = ext.toLowerCase();
 
	for (i = 0; i < extensions.length; i++)
	{
  	  if(extensions[i] == final_ext)
 	   {
 	   return true;
    	}
	}	
 
	alert("You must upload an image ` with one of the following extensions: "+ extensions.join(', ') +".");
	return false;
}
 //-->
 
 </SCRIPT>

</head>
	
<body>

<form action="" method="post" enctype="multipart/form-data" name="form" onsubmit="return validate();">
ChooseFile: <input type="file" name="image_file">
 <input type="submit" name="submit" value="submit">
</form>

</body>
</html>
