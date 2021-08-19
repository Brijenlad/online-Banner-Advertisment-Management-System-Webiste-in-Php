<?php

include("dbconnect.php");
session_start();
global $_SESSION;
	
$userid=$_REQUEST['id'];
$userpass=$_REQUEST['pass'];


		$sql="select * from register where email='".$userid."' and pwd='".$userpass."'";
		$result = mysql_query($sql);
		
	/*	while($row=mysql_fetch_assoc($result))
		{
			$a=$row['UserName'];
			echo $a."<br>";
		}
	*/	
		if(mysql_num_rows($result)==1)
		{	
			$row=mysql_fetch_assoc($result);
			$i=$row["reg_id"];
			$u=$row["email"];
			$p=$row["pwd"];
			$_SESSION["reg_id"] =$row['reg_id'];
			$_SESSION["email"] =$row['email'];
         	header("location:user_home.php");
		}
		elseif($userid=="admin@admin.com" && $userpass=="admin123")
			{
				$_SESSION["email"] =$userid;
					
				header("location:admin_home.php");
			
			}

		else
		{
			$temp="User Name and Password is Wrong";
			echo "<script> alert('User Name and Password is Wrong');</script>";
			
			header("Location:index.php?msg=$temp");
		}

?>





<?php /*?>
<?php

	if(isset($_POST['submit']))
	{
		$userid=$_POST['txtemail'];
		$userpass=$_POST['txtpwd'];
		$sql="select * from register where email='$userid'";
		
		$result=mysql_query($sql);
		if(!$result)
		{
			die("Could not execute query".mysql_error());
		}
		else
		{
			while($row=mysql_fetch_array($result))
			{
				$e=$row['email'];
				$pass=$row['pwd'];
				if($userid==$e && $userpass==$pass)
				{
						//header("location:admin_home1.php");
						echo "<script> alert(going); </script>";
				}
				else
				{
					echo "Username and password wrong";
				}
			}
		}
	}

?><?php */?>