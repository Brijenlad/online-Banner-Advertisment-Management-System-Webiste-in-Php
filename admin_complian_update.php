<?php
include("dbconnect.php");
session_start();

$a=$_GET["com_id"];
$sql="select * from complain where com_id='".$a."'";
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
			}
}
?>
<?php
		if(isset($_POST["submit"]))
		{
				$a=$_GET["com_id"];
				$d=$_POST["title"];
				$b=$_POST["detail"];
				//$email=$_POST['email'];
				//$msg=$_POST['msg'];
				
				$sql="UPDATE complain SET title='".$d."', detail='".$b."' where com_id='".$a."'";
				$res=mysql_query($sql);
				if(!$res)
				{
						die("Not updated".mysql_error());
				}
				else
				{
						$msg="Update Sucessfully.....";
						header("location:complian_delete.php?msg_d=$msg");
				}
	  }
?>


<?php
	include("header1.php");
?>
<html>
<script type="text/javascript">	
	function valid()
	{
		var title=document.inquiry.title.value;
		var detail=document.inquiry.detail.value;
		
		if(title=="")   //title
		{
			alert("Title Cannot not be blank");
			document.inquiry.title.focus();
			return false;

		}
		if(detail=="")   //detail
		{
			alert("Please Enter Your Comment.");
			document.inquiry.detail.focus();
			return false;
		}

	}

</script>

</head>
<body>
<form method="post" name="inquiry" onsubmit="return valid()">
<div>			
<ul style="list-style:none;">
			<li style="float:left; width:100px;">Title :</li>
			<li><input type="text" name="title" value="<?php echo $a;?>" /></li><br />		
			<li style="float:left; width:100px;">Detail :</li>
			<li><textarea name="detail" cols="20" rows="5"><?php echo $b;?></textarea></li><br />			
			<li><input type="submit" name="submit" value="submit" /></li><br />			
</ul>
</div>
</form>
</body>
</html>

<?php
	include("footer1.php");
?>