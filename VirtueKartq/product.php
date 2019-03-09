<?php
session_start();
 $code=$_GET['code'];?>
<?php
		include('dbconnection.php');
		if(isset($_POST['submit']))
		{
		if(!isset($_SESSION['email']) ||(!isset($_SESSION['pwd'])))
			{
				header('Location:login.php');
			}
			else
			{
				$query="select * from product where product_code='$code'";
				$result=mysqli_query($bd,$query);
				while($row=mysqli_fetch_array($result))
				{
					$image=$row['image1'];
					$pro_name=$row['product_name'];
					$price=$row['offer_price'];
					$code =$row['product_code'];
				}
				$email=$_SESSION['email'];
				$quantity=$_POST['quantity'];
			/*	echo "$email";

				echo "$code";

				echo "$pro_name";

				echo "$image";

				echo "$quantity";

				echo "$price";*/
				$queryadd="insert into shopping_cart values('','$email','$code','$pro_name','$image','$quantity','$price','')";
				$rsadd=mysqli_query($bd,$queryadd);
				if($rsadd)
				{
					 header('location:cartdetails.php');
				}
			}
		}
?>
<!DOCTYPE html>
<html>
<head>
<title>Online Shopping Site for Mobiles, Fashion,Electronics, Home Appliances and More </title>
<link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
 <script src="themes/1/js-image-slider.js" type="text/javascript"></script>
 <link href="generic.css" rel="stylesheet" type="text/css" />
<link href="css_pirobox/css_page.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css_pirobox/white/style.css" media="screen" title="shadow" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js123/jquery.min.js"></script>
<script type="text/javascript" src="js123/piroBox.1_2.js"></script>
<script type="text/javascript">
$(document).ready(function() {

	$().piroBox({

			my_speed: 600, //animation speed

			bg_alpha: 0.5, //background opacity

			radius: 4, //caption rounded corner

			scrollImage : false, // true == image follows the page, false == image remains in the same open position

			pirobox_next : 'piro_next', // Nav buttons -> piro_next == inside piroBox , piro_next_out == outside piroBox

			pirobox_prev : 'piro_prev',// Nav buttons -> piro_prev == inside piroBox , piro_prev_out == outside piroBox

			close_all : '.piro_close',// add class .piro_overlay(with comma)if you want overlay click close piroBox

			slideShow : 'slideshow', // just delete slideshow between '' if you don't want it.

			slideSpeed : 4 //slideshow duration in seconds(3 to 6 Recommended)

	});

});

</script>

</head>

<body>



<div style="width:100%; height:auto;">



   <!--header --><div style="height:120px; width:100%; background-color:#8B8A90;border:0px solid #000000;">

  <?php include ('header.php'); ?>

   </div>



  <!--menu--> <div style="height:45px; width:100%; background-color:#269FB2; border:0px solid #269FB2;">

    <?php include ('menu.php'); ?>

   </div><!--menu close-->



  <!--cc--><div style="height:auto; width:100%;border:0px solid #269FB2;">

     <!--sliderall--> <div style="height:328px; margin:auto; width:1050px; border:0px solid #990000;  ">

       <?php include ('slider.php');?>



                  </div><!--sliderall close-->







<!--slider down data-->

             <table style="height:auto; margin-bottom:200px; width:1050px; margin:auto;border:0px solid #A69688; border-radius:5px; background-color:#FFFFFF; ">



             <tr><td>

        <?php

			include ('dbconnection.php');

			 $query="select * from product where product_code='$code'";

			 $result=mysqli_query($bd,$query);

			while($row=mysqli_fetch_array($result))

		      {

				  $image=$row['image1'];



					$pro_name=$row['product_name'];

					 $price=$row['offer_price'];

					  $code =$row['product_code'];

		  ?>



          <!--left image--> <div style="height:300px; width:400px; border:0px solid #990000; margin-top:10px; float:left;" align="center"><a href="images/<?php echo $row['image1'];?>"  class="pirobox" title="<?php echo $row['product_name'];?>"><img src="images/<?php echo $row['image1'];?>" height="150" width="200" style="margin-top:20px; border:0px solid #0000FF;" ></a></div><!--left image close-->



          <!--product details--> <div style="height:auto; width:600px; border:0px solid #990000; float:left;" >

           <div style="height:30px; width:500px;border:0px solid #000000; color:#269FB2; margin-top:20px;" ><b><font size="+1"><?php echo $row['product_name'];?></font></b></div>

          <!--waranty--> <div style="height:60px; width:600px;border:0px solid #000000; margin-top:10px;"  >

           <table><tr><td style="color:#17626C;"><b>Warranty:</b></td><td><?php echo $row['waranty'];?></td></tr>

           <tr> <td style="color:#17626C;"><b>Shipping Time: </b></td><td> <?php echo $row['shipping_time'];?></td></tr>



           </table>



           </div><!--waranty close-->

           <!--price--> <div style="height:100px; width:600px;border:0px solid #000000; margin-top:5px;"  >

          <div style="border:10px solid #E0E0E0; width:100px; float:left;"><p align="center"><b>MRP</b><br>Rs. <?php echo $row['price'];?></p></div>



            <div style="border:10px solid #E0E0E0; width:100px; float:left;"><p align="center"><b>Offer Price</b><br>Rs. <?php echo $row['offer_price'];?></p></div>



             <div style="border:10px solid #E0E0E0; width:100px; float:left;"><p align="center"><b>You Save<br></b>Rs. <b style="color:#FF0000;"><?php echo $row['save'];?></b></p></div>



           </div><!--price close-->

             <div style="border:0px solid #000000; width:500px; height:50px;">

             <form name="form1" method="post">

            <table><tr><td style="color:#17626C;"><b>Quantity:&nbsp;&nbsp;</b></td><td> <input type="text" name="quantity" value="1" style="width:50px;">

			</td></tr>     </table>

           <div style="height:50px; border:0px solid #000000; width:150px; margin-left:20px; margin-top:10px;" >




<a href="cartdetails.php">


         <input type="submit" name="submit" value="ADD TO CART" style="border:0px solid #000000; border-radius:10px; height:40px; width:140px; background-color:#7CE1D6; font:bold; ">
</a>


           </div></form></div><!--product details close-->

           </div>

           </td></tr>

        </table>



           <table  style="margin:auto; background-color:#FFFFFF; width:1050px; height:auto; margin:auto;">

           <tr><td>

           <div style="margin:auto; width:1050px; height:auto;">

            <div style="height:30px; width:130px; margin-left:25px; background-color:#269FB2; color:#FFFFFF;border:1px solid #B9B9B9;border-radius:8px 8px 0 0;" align="center"><p style="margin-top:10px;"><b>Quick Overview</b></p></div>



           <table border="0" style="width:1000px; height:auto; border:1px solid #B9B9B9; border-radius:5px;" align="center">

		  <tr><td style="background-color:#F6F6F6; width:300px; font-size:15px;">Product Name</td><td><?php echo $row['product_name'];?></td></tr>

          <tr><td style="background-color:#F6F6F6; width:300px; font-size:15px;">Product Description</td><td><?php echo $row['description'];?></td></tr>

          <tr><td style="background-color:#F6F6F6; width:300px; font-size:15px;">Brand</td><td><?php echo $row['brand'];?></td></tr>

          <tr><td style="background-color:#F6F6F6; width:300px; font-size:15px;">Category</td><td><?php echo $row['category'];?></td></tr>

          <tr><td style="background-color:#F6F6F6; width:300px; font-size:15px;">Features</td><td><?php echo $row['features'];?></td></tr>

          <tr><td style="background-color:#F6F6F6; width:300px; font-size:15px;">Plateform</td><td><?php echo $row['plateform'];?></td></tr>

          <tr><td style="background-color:#F6F6F6; width:300px; font-size:15px;">Model</td><td><?php echo $row['model'];?></td></tr>

          <tr><td style="background-color:#F6F6F6; width:300px; font-size:15px;">Type</td><td><?php echo $row['type'];?></td></tr>

          <tr><td style="background-color:#F6F6F6; width:300px; font-size:15px;">Display</td><td><?php echo $row['display'];?></td></tr> </table>

		<?php

		}

		?>

         </div>

  </td></tr></table>

       <!--slider down close-->

          <div style="height:30px; width:1050px; margin:auto; border:0px solid #000000;">

         <?php include('marquee.php'); ?>



        </div>



       <!--footer--><div style="width:100%; margin:auto; background-color:#414040;height:150px; border:1px solid #000000; color:#FFFFFF; ">

         <?php include('footer.php'); ?>

         </div><!--footer close-->

     </div> <!--center close-->

           </div><!--main close-->





</body>

</html>

