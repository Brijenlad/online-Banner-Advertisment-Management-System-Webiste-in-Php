<?php
session_start();
    include("dbconnect.php");
    include('header1.php');
   $userid=$_SESSION['email'];   
   
          $s="select * from banner";
          $res=mysql_query($s);
          if(isset($_REQUEST['ban_id']))
          {
              $id=$_REQUEST['ban_id'];
           }
   ?>


 <script type="text/javascript">     
        function PrintDiv() {    
           var divToPrint = document.getElementById('divToPrint');
           var popupWin = window.open('', '_blank', 'width=700,height=500');
           popupWin.document.open();
           popupWin.document.write('<html><body onload="window.print()"><link rel="stylesheet" href="css/style.css">' + divToPrint.innerHTML + '</html>');
            	//popupWin.print();
		//	popupWin.document.write.close();
			popupWin.document.close();
                }
     </script>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
        <title>Banner</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <link rel="stylesheet" href="lightbox.css" type="text/css" media="screen" />
        <script src="js/prototype.js" type="text/javascript"></script>
        <script src="js/scriptaculous.js?load=effects" type="text/javascript"></script>
        <script src="js/lightbox.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/java.js"></script>
        <script>
        function my()
        {
            window.print();
        }
        </script>
    </head>
    <body>
        <div id="page">

            <div id="contents">
                <div class="box">

                    <div>
					  <div class="body">
                            <?php
                                if($_SESSION['email']==true)
                                {
                                ?>
                                <h2>Welcome,<?php echo $_SESSION['email'];?></h2>
                                <?php
                                }
                            ?>
							                            <center><h1> Banner reports</h1></center>

<div id = "divToPrint">

                            <div id="demo" class="demolayout">
                                <form action="" method="post">
                    
 <table class="cart_table" align="center" style="background-color:white;border-radius:5px">

<tr class="cart_title">
				
											<td>Id</td>
                                            <td>Logo:</td>
											<td>Title:</td>
                                            <td>Layout:</td>
                                            <td>Duration:</td>
											<td>Link:</td>
											<td>Content:</td>
										  	<td>Address:</td>
											<td>Price:</td>  
                                        </tr>
                                        <?php
    while($a=mysql_fetch_array($res))
    {
        ?>
               <tr>
               <td><?php echo $a['ban_id'] ?></td>
               <td><?php echo $a['logo']?></td>
               <td><?php echo $a['titlee']?></td>
			   <td><?php echo $a['layout']?></td>
               <td><?php echo $a['duration']?></td>
               <td><?php echo $a['link']?></td>
			   <td><?php echo $a['content']?></td>
			   <td><?php echo $a['address']?></td>
			   <td><?php echo $a['price']?></td>

               </tr>
        <?php 
    }
?>
   <div class="form_row">
                    <td> <a href="admin_home2.php">Back</a>   </td>



                   </div> 

                                    </table>
                                </form>
                                                                                                             
 <td>              <input type="button" value="print" onClick="PrintDiv();" class="register"/>             
		 </td>    
                                <div class="tabs-container">
                                    <div style="display: block;" class="" id="tab1">
                                        <p class="more_details">
                                        </p>           

                                        <p class="more_details">
                                        </p>            
                                    </div>


                                   
                        <div id="contact" class="body">




                        </div>

                    </div>
                </div>
            </div>

        </div>

        <?php
            include('footer.php');
        ?>
    </body>
   
</html>