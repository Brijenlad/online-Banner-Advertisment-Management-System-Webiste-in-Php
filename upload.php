<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<?php
	if(isset($_POST["submit"]) && $_POST["submit"]=="submit")
	{
	if(($_FILES["file"]["type"]=="images/gif")||($_FILES["file"]["type"]=="images/pjpeg")||($_FILES["file"]["type"]=="images/jpg")||($_FILES["file"]["size"]>80000))
			{
							if($_FILES["file"]["error"]>0)
							{
									echo "Error.".$_FILES["file"]["error"];
							}
							else
							{
									echo "Upload:".$_FILES["file"]["name"]."<br>";
									echo "Type:".$_FILES["file"]["type"]."<br>";
									echo "Size:".$_FILES["file"]["size"]."<br>";
									echo "Temp_name:".$_FILES["file"]["tmp_name"]."<br>";
									move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$_FILES["file"]["name"]);
							}
			}
			else
			{
					echo "Invalid entry";
			}
		}
	
		?>
<form action="file_up.php" method="post" enctype="multipart/form-data">
<table>
<tr>
<td>
			<input type="file" name="file" />
			</td>
			</tr>
	<tr>
	<td>
				<input type="submit" value="submit" name="submit" />
				</td>
				</tr>
		</table>
		</form>
		</html>
		

							
							
</body>
</html>
