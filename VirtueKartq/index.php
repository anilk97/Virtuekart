<?php session_start();?>

<!DOCTYPE html>

<html>
<!--Script for alert-->

<!--Script End-->

<head>

<title>Online Shopping Site for Mobiles, Fashion,Electronics, Home Appliances and More</title>

<link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />

 <script src="themes/1/js-image-slider.js" type="text/javascript"></script>

 <link href="generic.css" rel="stylesheet" type="text/css" />

 <script type="text/javascript" src="clients.js"></script>



</head>





<body>





<div style="width:100%; height:auto;">



   <!--header --><div style="height:120px; width:100%; background-color:#8B8A90;border:0px solid #000000;">

  <?php include ('header.php'); ?>

   </div>



  <!--menu--> <div style="height:45px; width:100%; background-color:#269FB2; border:0px solid #269FB2;">

    <?php include ('menu.php'); ?>

   </div><!--menu close-->

  

   

    <!--sliderall--> <div style="height:328px; margin:auto; width:1050px; border:0px solid #990000;  ">

       <?php include ('slider.php');?>

        </div><!--sliderall close-->

 

  

  

<!--slider down data-->

            <div style="height:auto; width:1050px; margin:auto;   border:0px solid #000000; background-color:#FFFFFF; ">

           
                        <!--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%  TV  %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->  

                        <div style="height:30px; width:1050px; border:0px solid #000000; color:#269FB2; font-size:18px; background-color:#DAD8D8;border-radius:5px; margin-top:10px; "><p style="margin-left:20px; margin-top:5px;"><b> HOT OFFERS</b></p></div>      

			 <table align="center">

               <tr style="height:200px; width:820px ">

             <?php

			 include('dbconnection.php');

			 $query="select * from product where pro_cat='tv' limit 0,4";

			 $result=mysqli_query($bd,$query);

			 $i=1;

				while($row=mysqli_fetch_array($result))

				{

		?>

                   <td  style=" width:255px; border:0px solid #0000CC;"align="center" >

                    <div style="height:300px; width:230px; float:left;border:1px solid #B9B9B9;border-radius:10px; margin-left:12px; margin-top:20px;"> 

                    <div style="height:150px; width:230px; border:0px solid #000000;border-radius:15px; margin-top:10px;" align="center"><a href="product.php?code=<?php echo $row['product_code'];?>" style="text-decoration:none;"><img src="images/<?php echo $row['image1'];?>" height="130" width="185"></a></div> 

                    <div style="height:120px; width:215px; border:0px solid #000000;border-radius:15px; margin-left:8px;">

                    <table border="0">

                    <tr><td style="color:#990000; height:30px; width:210px;" align="center" colspan="3"><font style="color:#269FB2"><b><?php echo $row['product_code'];?></b></font></td></tr>                   

                    <tr><td height="20"><b>Brand:</td><td colspan="2" style=" margin-left:5px;"></b><?php echo $row['brand'];?></td></tr>

                    <tr><td height="20"><strong>Price:&nbsp;</strong></td><td style="color:#FF0000; width:10px;">Rs. </td><td><?php echo $row['product_price'];?> </td></tr>

                    </table>



                    <div><table border="0" width="220">  <tr style="border:0px solid #000000; height:30px;" align="center"><td colspan="2"> <a href="product.php?code=<?php echo $row['product_code'];?>" style="text-decoration:none;"><input type="button" name="buynow" value="DETAILS" style="height:25px; width:75px; background-color:#269FB2; border:0px solid #333333; border-radius:5px; color:#FFFFFF;"></a></td>

                           </tr>

                    </table></div>

          </div>

             

                     </div>

                  </td>

     <?php if($i%4==0)

	 {?>

     </tr>

     

   <?php	

	 }

	$i=$i+1;

	}

?>

           

 </table>

 <!---->

<!--%%% TV CLOSE %%%%-->
<!--%%%%   MUSIC %%%%-->        

            <!--%-->        

			 <table  align="center">

               <tr style="height:200px; width:820px">

               <?php

			 include('dbconnection.php');

			 $query="select * from product where pro_cat='music' limit 0,4";

			 $result=mysqli_query($bd,$query);

			 $i=1;

				while($row=mysqli_fetch_array($result))

				{

                 ?>

                   <td  style=" width:255px; border:0px solid #0000CC;"align="center" >

                    <div style="height:300px; width:230px; float:left;border:1px solid #B9B9B9;border-radius:10px; margin-left:12px; margin-top:20px;"> 

                    <div style="height:170px; width:230px; float:left;border:0px solid #000000;border-radius:15px;" align="center"><a href="product.php?code=<?php echo $row['product_code'];?>" style="text-decoration:none;"><img src="images/<?php echo $row['image1'];?>" height="170" width="180"></a></div> 

                    <div style="height:120px; width:215px; float:left;border:0px solid #000000;border-radius:15px; margin-left:8px;">

                    <table border="0">

                    <tr><td style="color:#990000; height:30px; width:210px;" align="center" colspan="3"><font style="color:#269FB2"><b><?php echo $row['product_code'];?></b></font></td></tr>                   

                    <tr><td height="20"><b>Brand:</td><td colspan="2" style=" margin-left:5px;"></b><?php echo $row['brand'];?></td></tr>

                    <tr><td height="20"><strong>Price:&nbsp;</strong></td><td style="color:#FF0000; width:10px;">Rs. </td><td><?php echo $row['product_price'];?> </td></tr>

                    </table>



                   <div><table border="0" width="220">  <tr style="border:0px solid #000000; height:30px;" align="center"><td colspan="2"> <a href="product.php?code=<?php echo $row['product_code'];?>" style="text-decoration:none;"><input type="button" name="buynow" value="DETAILS" style="height:25px; width:75px; background-color:#269FB2; border:0px solid #333333; border-radius:5px; color:#FFFFFF;"></a></td>

                           </tr>

                    </table></div>

          </div>

             

                     </div>

                  </td>

                  <?php if($i%4==0)

	                {?>

                         </tr>

                      

                   <?php	

	           }

	

	                     $i=$i+1;

	                         }

                                  ?>

	  </table>

                                         <!---->

                                                      <!--%%%%%     MUSIC CLOSE   %%%%%-->



            <!--%%% CAMERAS %%%-->        

                        <!---->        

			 <table align="center">

               <tr style="height:200px; width:820px">

               

                

             <?php

			 include('dbconnection.php');

			 $query="select * from product where pro_cat='camera' limit 0,4";

			 $result=mysqli_query($bd,$query);

			 $i=1;

				while($row=mysqli_fetch_array($result))

				{



		?>

                 <td  style=" width:255px; border:0px solid #0000CC;"align="center" >

                    <div style="height:300px; width:230px; float:left;border:1px solid #B9B9B9;border-radius:10px; margin-left:12px; margin-top:20px;"> 

                    <div style="height:170px; width:230px; float:left;border:0px solid #000000;border-radius:15px;" align="center"><a href="product.php?code=<?php echo $row['product_code'];?>" style="text-decoration:none;"><img src="images/<?php echo $row['image1'];?>"     height="170" width="180"></a></div> 

                    <div style="height:120px; width:215px; float:left;border:0px solid #000000;border-radius:15px; margin-left:8px;">

                    <table border="0">

                    <tr><td style="color:#990000; height:30px; width:210px;" align="center" colspan="3"><font style="color:#269FB2"><b><?php echo $row['product_code'];?></b></font></td></tr>                   

                    <tr><td height="20"><b>Brand:</td><td colspan="2" style=" margin-left:5px;"></b><?php echo $row['brand'];?></td></tr>

                    <tr><td height="20"><strong>Price:&nbsp;</strong></td><td style="color:#FF0000; width:10px;">Rs. </td><td><?php echo $row['product_price'];?> </td></tr>

                    </table>



                    <div><table border="0" width="220">  <tr style="border:0px solid #000000; height:30px;" align="center"><td colspan="2"> <a href="product.php?code=<?php echo $row['product_code'];?>" style="text-decoration:none;"><input type="button" name="buynow" value="DETAILS" style="height:25px; width:75px; background-color:#269FB2; border:0px solid #333333; border-radius:5px; color:#FFFFFF;"></a></td>

                           </tr>

                    </table></div>

          </div>

             

                     </div>

                  </td>

     <?php if($i%4==0)

	 {?>

     </tr>

     

     

	<?php	

	 }

	

	$i=$i+1;

	}

?>

           

        </table>


<!--%%%%%%%%%%%%%%%%%%%%%%%%%% % MOBILES  %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->        

                       
			 <table  align="center">

               <tr style="height:200px; width:820px">

               

                

             <?php

			 include('dbconnection.php');

			 $query="select * from product where pro_cat='mobile' limit 0,4";

			 $result=mysqli_query($bd,$query);

			 $i=1;

				while($row=mysqli_fetch_array($result))

				{



		?>

                  <td  style=" width:255px; border:0px solid #0000CC;"align="center" >

                    <div style="height:300px; width:230px; float:left;border:1px solid #B9B9B9;border-radius:10px; margin-left:12px; margin-top:20px;"> 

                    <div style="height:170px; width:230px; float:left; margin-top:10px;border:0px solid #000000;border-radius:15px;" align="center"><a href="product.php?code=<?php echo $row['product_code'];?>" style="text-decoration:none;"><img src="images/<?php echo $row['image1'];?>"  height="130" width="200" style="border:#00CC33 0px solid; margin-top:10px;"></a></div> 

                    <div style="height:120px; width:215px; float:left;border:0px solid #000000;border-radius:15px; margin-left:8px;">

                    <table border="0">

                    <tr><td style="color:#990000; height:30px; width:210px;" align="center" colspan="3"><font style="color:#269FB2"><b><?php echo $row['product_code'];?></b></font></td></tr>                   

                    <tr><td height="20"><b>Brand:</td><td colspan="2" style=" margin-left:5px;"></b><?php echo $row['brand'];?></td></tr>

                    <tr><td height="20"><strong>Price:&nbsp;</strong></td><td style="color:#FF0000; width:10px;">Rs. </td><td><?php echo $row['product_price'];?> </td></tr>

                    </table>



                    <div><table border="0" width="220">  <tr style="border:0px solid #000000; height:30px;" align="center"><td colspan="2"> <a href="product.php?code=<?php echo $row['product_code'];?>" style="text-decoration:none;"><input type="button" name="buynow" value="DETAILS" style="height:25px; width:75px; background-color:#269FB2; border:0px solid #333333; border-radius:5px; color:#FFFFFF;"></a></td>

                           </tr>

                    </table></div>

          </div>

             

                     </div>

                  </td>

     <?php if($i%4==0)

	 {?>

     </tr>

    

     

        

	<?php	

	 }

	

	$i=$i+1;

	}

?>

     </td>      

        </table>

              <!--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%  MOBILES CLOSE  %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->

                                              <!--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->







         <!--slider down close-->

        <div style="height:30px; width:1050px; margin:auto; border:0px solid #000000;">

         <?php include('marquee.php'); ?>

        

        </div>

         </div>
        

       <!--footer--><div style="width:100%;">   

             <?php include('footer1.php'); ?>

         </div><!--footer close-->

     </div> <!--center close-->

           </div><!--main close-->





</body>

</html>

