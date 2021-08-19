<?php
include('dbconnect.php');
session_start();
	global $_SESSION;
include("header.php");

	if(!isset($_SESSION["email"]))
	{		
		header("location:index.php");
	}
?>
<?php
$id=$_GET['bid'];
$eid=$_SESSION['email'];

$sql="select * from gallery where gal_id='".$id."'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{
	$p=$row['price'];
}

if(isset($_POST['submit']))
{
	$p1=$_GET['p'];	
	 $id=$_GET['bid'];
	$eid=$_SESSION['reg_id'];
	
	$sql="select * from gallery where gal_id='".$id."'";
	$res=mysql_query($sql);
	
	 $filename=$_FILES['file']['name'];
  	 $filetype=$_FILES['file']['type'];
	 
	// $logo=$_POST['file'];
	 $title=$_POST['txttitle'];
	 $height=$_POST['txtheight'];
	  
	 $width=$_POST['txtwidth'];
	 
	 $layout=$_POST['layout'];
	 $duration=$_POST['duration'];
	 $link=$_POST['txtlink'];
	 $content=$_POST['txtcontent'];
	 $address=$_POST['txtaddress'];
	 $dq=date("Y/m/d");
	 $p2=$p1*$duration;
	  if($filetype=='image/jpeg' || $filetype=='image/png' || $filetype=='image/gif')
		{
			move_uploaded_file($_FILES['file']['tmp_name'],'uploadlogo/'.$filename);
			$filepath="uploadlogo/".$filename;
		$sql1="INSERT INTO `banner` (`reg_id`,`gal_id`,`logo`, `titlee`, `height`, `width`, `layout`, `duration`, `link`, `content`, `address`, `price`,`date`) VALUES ('".$eid."','".$id."','".$filepath."', '".$title."', '".$height."', '".$width."', '".$layout."', '".$duration."', '".$link."', '".$content."', '".$address."', '".$p2."','".$dq."')";
	
			$result=mysql_query($sql1);

	if(!$result)
	{
		die('error'.mysql_error());
		
	}
	echo "<script> alert('You Have Successfully Submitted Your  Banner Detail, Please Provide final Approval.');</script>";
	echo "<center><a style='color:blue;' href='confirm_banner.php?gal_id=$id&p=$p1'><u>Click Here to View Detail</u></a></center>";
	
	//		header("Location:user_home.php");
	}
}

?>

<html>
<head>
	<title>Online Banner Advertisement</title>
<link rel="stylesheet" href="layout/scripts/prettyphoto/prettyPhoto.css" type="text/css" />
<script type="text/javascript" src="layout/scripts/prettyphoto/jquery.prettyPhoto.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $("a[rel^='prettyPhoto']").prettyPhoto({
        theme: 'dark_rounded',
        overlay_gallery: false,
        social_tools: false
    });
});
</script>
<script type="text/javascript">

	function check()
	{
		
			var t=document.checkform.txttitle.value;
			var a=document.checkform.txtaddress.value;
			var c=document.checkform.txtcontent.value;
			var l=document.checkform.txtlink.value;
			var h=document.checkform.txtheight.value;
			var w=document.checkform.txtwidth.value;
			var ly=document.checkform.layout.value;
			var dur=document.checkform.duration.value;
			var extensions = new Array("jpg","jpeg","gif","png","bmp");
			var file = document.checkform.file.value; 
			var image_length = document.checkform.file.value.length; 
			var pos = file.lastIndexOf('.') + 1; 
			var ext = file.substring(pos, image_length); 
			var final_ext = ext.toLowerCase();
		
			if(file=="")
			{
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
			if(t=="")
			{
				alert("Please Enter the Title");
				document.checkform.txttitle.focus();
				return false;
			}
			if(h=="")
			{
				alert("Please Enter the Height");
				document.checkform.txtheight.focus();
				return false;
			}
			if(isNaN(h))
			{
				alert("Please Enter Number Only in Height");
				document.checkform.txtheight.focus();
				return false;
			}
			if(w=="")
			{
				alert("Please Enter the Width");
				document.checkform.txtwidth.focus();
				return false;
			}
			if(isNaN(w))
			{
				alert("Please Enter Number Only in Width");
				document.checkform.txtwidth.focus();
					return false;
			}			
			if(ly=="")
			{
				alert("Please Select Your Layout");
				document.checkform.layout.focus();
				return false;
			}
			if(dur=="")
			{
				alert("Please Select Your Banner Duration");
				document.checkform.duration.focus();
				return false;
			}
			if(l!="")
			{
				var mailformat=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
				if(l.match(mailformat))
				{
				
				}
				else
				{
					alert("Invalid Link");
					document.checkform.txtlink.focus();				
					return false;
				}
			}
			if(c=="")
			{
				alert("Please Enter Your Content for Banner");
				document.checkform.txtcontent.focus();
				return false;
			}
			if(a=="")
			{
				alert("Please Enter Your Address");
				document.checkform.txtaddress.focus();
				return false;
			}					
	
	}

</script>
</head>
<body>
<div><h1>Please Fill Your Banner Detail</h1><font color=red>(* are compulsory filled.)</font></div>
<form name="checkform" method="post" onSubmit="return check()" enctype="multipart/form-data" >
	<div style="width:500px; float:left;">
	<ul style="list-style:none;">
		<li style="float:left; width:150px;">Banner Id : </li>
		<li><input type="text" value="<?php echo $id;?>" disabled></li><br>
		<li style="float:left; width:150px;">Email Id : </li>
		<li><input type="text" value="<?php echo $eid;?>" disabled></li><br>
		<li style="float:left; width:150px;">Price : </li>
		<li><input type="text" value="<?php echo $p."/month";?>" disabled></li><br>
		
		<li style="float:left; width:150px;">Logo Image:	</li>
		<li><input type="file" name="file">	</li><br>
		<li style="float:left; width:150px;">Title * :</li>
		<li><input type="text" name="txttitle" value=""></li><br>
		<li style="float:left; width:150px;">Size * :</li>
		<li><input type="text" name="txtheight" value="" size=2/> X <input type="text" name="txtwidth" value="" size=2/> (height x width)<br /><br /></li>	
		<li style="float:left; width:150px;">Layout * :</li>
		<li><select name="layout" id="layout" >
			<option value="">----Select----</option>	
			<option value="Landscape">Landscape</option>
			<option value="Portrait">Portrait</option>
		</select>
		<br><br>
		<li style="float:left; width:150px;">Duration * :</li>
		<li><select name="duration" id="duration" >
			<option value="">----Select----</option>
			<option value="3">3 Months</option>
			<option value="6">6 Months</option>
			<option value="12">12 Months</option>
		</select>
		<br><br>
		<li style="float:left; width:150px;">Link :</li>
		<li><input type="text" name="txtlink" value=""></li><br>
		<li style="float:left; width:150px;">Content * :</li>
		<li><textarea name="txtcontent" cols="35" rows="6" ></textarea>	</li><br>
		<li style="float:left; width:150px;">Contact Detail * :</li>
		<li><textarea name="txtaddress" cols=35" rows="4" ></textarea>	</li>	
	</ul>
		<input type="submit" name="submit" value="submit" style="margin-left:370px">
		
</div>
	<div>
	<h3>You Have Selected :</h3>

	<?php
		
		$sql="select * from gallery where gal_id='".$id."'";
		$rdata=mysql_query($sql);
		while($res=mysql_fetch_array($rdata))
		{
			$imgpath=$res['image'];
			echo "<a href='$imgpath' rel='prettyPhoto[gallery]' title='Click to Zoom' ><img rel='prettyPhoto[gallery1]' src='$imgpath' height='350' width='350'></a>&nbsp;";
		}		
	?>
		
	</div>
</form>
</body>
</html>



<?php
include("footer.php");

?>