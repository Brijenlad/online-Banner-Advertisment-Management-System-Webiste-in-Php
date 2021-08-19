<?php
mysql_connect("localhost","root","") or die("ERROR:Connection lost");
   mysql_select_db('advertise');	
$sql="select * from test_image1";
$rdata=mysql_query($sql);
while($res=mysql_fetch_array($rdata))
{
$imgpath=$res['image'];
echo "<img src='$imgpath' height='200' width='200'>";
}
?>