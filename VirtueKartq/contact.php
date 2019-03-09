<?php session_start();?>

<!DOCTYPE html>

<html>

<head>

<title>Online Shopping Site for Mobiles, Fashion,Electronics, Home Appliances and More </title>

<link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />

 <script src="themes/1/js-image-slider.js" type="text/javascript"></script>

 <link href="generic.css" rel="stylesheet" type="text/css" />

 

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

                        <table style="height:auto; width:1050px; margin-top:140px; margin:auto; border:0px solid #000000; ">

<tr><td style=" margin-bottom:250px; ">

<div style="height:auto;border:0px solid #000000; width:650px; float:left;">  

<p style="margin-left:20px; margin-top:20px; margin-right:40px;" align="justify">

	 <?php





			include('dbconnection.php');

$server=mysql_query("select * from static where page='contact'");

while($get=mysql_fetch_array($server))

{

       echo $get['details'];

}



?>

</p>

        

        </div><!--slider down close-->

   <div style="height:auto;border:0px solid #000000; margin-bottom:50px;  width:350px; float:left;" align="center"> <img src="images/101.jpg"> </div> 

   </td></tr></table>        

         <div style="height:30px; width:1050px; margin:auto; border:0px solid #000000;">

         <?php include('marquee.php'); ?>

        

        </div>

         </div>

       <!--footer--><div style="width:100%; background-color:#414040; height:150px; border:1px solid #000000; ">

         <?php include('footer.php'); ?>

         </div><!--footer close-->

     </div> <!--center close-->

           </div><!--main close-->

           





</body>

</html>



