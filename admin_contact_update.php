<?php
include("dbconnect.php");


$a=$_GET["cnct_id"];
echo $a;
$sql="select uname from contact where cnct_id='".$a."'";
$res=mysql_query($sql);
if(!$res)
{
		die("could not connect".mysql_error());
}
else
{
			while($row=mysql_fetch_array($res))
			{
					$a=$row["uname"];
			}
}
?>
<html>
<body>
<form method="post" name="update">
			<input type="text" name="uname" value="<?php echo $a;?>" /><br /><br />
		
			<input type="submit" name="submit" value="submit" /><br /><br />
</form>
</body>
</html>
<?php
		if(isset($_POST["submit"]))
		{
				$a=$_GET["cnct_id"];
				$d=$_POST["uname"];
				//$email=$_POST['email'];
				//$msg=$_POST['msg'];
				
				$sql="UPDATE contact SET uname='".$d."' where cnct_id='".$a."'";
				$res=mysql_query($sql);
				if(!$res)
				{
						die("Not updated".mysql_error());
				}
				else
				{
						$msg="Update Sucessfully.....";
						header("location:admin_contact_delete.php?msg_d=$msg");
				}
	  }
?>