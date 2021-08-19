
<?php
	include('dbconnect.php');	
	include("admin_header.php");
?>
<html>


<?php
//$a=$_GET['inq_id'];
$no=10;
if(isset($_GET['page']))
{
	$page=$_GET['page'];
	$page2=$page;
	if($page=="" || $page=="1")	
	{
		$page1=0;
	}
	else
	{
		$page1=($page*$no)-$no;
	}
}
else
{
	$page=0;
	if($page=="" || $page=="1")
	{
		$page1=0;
	}
	else
	{
	$page1=($page*$no)-$no;
	}
}

$sql="select * from renew";

$i = 0;

//$sql="delete from inquiry where inq_id='$a'";
	
	$result=mysql_query($sql);
	
	$dyn_table = '<table border="1" cellpadding="10"><th colspan="2" style="background-color:Black; color:#FFFFFF;" >Renew detail</th>';
		
		while($row=mysql_fetch_array($result))
		
		 if ($i % 1 == 0) 
		{
		
			$dyn_table .= "<tr style='background:white;color:black;'><td style='color:black;'><b>".$row['renew_id']."</b><br>".$row['uname']."</b><br>".$row['detail']."</td><td><a style='color:green;' href='admin_renew_delete.php?renew_id=$row[renew_id]'>Delete</a>&nbsp;&nbsp;&nbsp;<a style='color:red;' href='admin_renew_update.php?renew_id=$row[renew_id]'>Update</a></td>";
			//echo "$row[inq_id]"."$row[title]"."$row[detail]";
			//echo "<a href='admin_delete.php?inq_id=$row[inq_id]'>delete</a>";
			//echo "<a href='admin_inquiry_update.php?inq_id=$row[inq_id]'>update</a><br>";
		}
		else 
	{
        $dyn_table .= '<td>No Record Available..!!!</td>';
    }
    $i++;
		
				$dyn_table .= '</tr></table>';
				//echo "<a href='delete.php'>delete</a><br>";
	
?>
<body></br>
<div  style="height:auto;">
<?php
echo $dyn_table;

$res1=mysql_query("select * from renew");
$count=mysql_num_rows($res1);	
if($count)
{
	$a=$count/$no;
	$a=ceil($a);

	$c=0;
	 ?>	 
	 <?php
	for($b=1;$b<=$a;$b++)
	{
		$c=$b;
		if($b==1)
		{	
			?><font size="+1">  <a href="renew_delete.php?page=<?php echo $b; ?>" style="text-decoration:none;">|<</a> </font>
	<?php
		}
		?> <font size="+2"> <a href="renew_delete.php?page=<?php echo $b; ?>" style="text-decoration:none;"><?php echo $b." ";?></a></font>
		<?php
		if($b==$a)
		{
			?> <font size="+1"> <a href="renew_delete.php?page=<?php echo $b; ?>" style="text-decoration:none;">>|</a></font><?php 
  		}		
	}
}
else
{
	echo '<font style="color:red;"><b>'."No Record Found....!".'</font>';
}
?>

</div>
</body>
</html>
<?php
include("admin_footer.php");
?>
