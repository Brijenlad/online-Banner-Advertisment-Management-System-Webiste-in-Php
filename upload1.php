<?php
	if(isset($_POST["submit"]) && $_POST["submit"]=="submit")
	{
		if(($_FILES["file"]["type"]=="images/gif")||($_FILES["file"]["type"]=="images/pjpeg")||($_FILES["file"]["type"]=="images/jpg")||($_FILES["file"]["size"]>80000))
		{
			if($_FILES["file"]["error"]>0)
			{
				echo "Error :".$_FILES["file"]["error"];
				
			}
			else
			{
				echo "Upload :".$_FILES["file"]["name"]."<br>";
				echo "Type :".$_FILES["file"]["type"]."<br>";
				echo "Size :".$_FILES["file"]["size"]."<br>";
				echo "Temp Name :".$_FILES["file"]["tmp_name"]."<br>";
				move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$_FILES["file"]["name"]);
			}	
		}
		else
		{
			echo "Invalid File";
		}
	}
?>


<html>
	<head>
		<title>	Uploading Image	</title>
	</head>
	
<body>
	
<form name="upload" method="post" enctype="multipart/form-data">
	Select File :
	<input type="file" name="file">
	<input type="submit" name="submit" value="submit">

</form>	
	

</html>

