<?php session_start();?>

<!DOCTYPE html>

<html>

<head>

<title>Privacy-Policy</title>

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

  

  

  <!--cc--><div style="height:auto; width:100%;border:0px solid #269FB2;">

  

  <!--sliderall--> <div style="height:328px; margin:auto; width:1050px; border:0px solid #990000;  ">

       <?php include ('slider.php');?>

       

                  </div><!--sliderall close-->

 

  

  

 

<!--slider down data-->            

            <table style="height:auto; width:1050px; border-bottom:10px;  margin-top:20px; margin:auto; background-color:#FFFFFF; border:0px solid #000000; " align="center">

            <tr><td style=" width:460px;  border:#99CC00 0px solid; " align="center" >

	  <div style="height:auto; width:1000px;  margin-top:30px; margin-bottom:20px;"align="justify">

       <?php





			include('dbconnection.php');

$server=mysql_query("select * from static where page='Privacy&Policy'");

while($get=mysql_fetch_array($server))

{

       echo $get['details'];

}



?>

</div>

        

      </td></tr></table><!--slider down close-->

            

         <div style="height:30px; width:1050px; margin:auto; border:0px solid #000000;">

         <?php include('marquee.php'); ?>

        

        </div>

         

       <!--footer--><div style="width:100%; background-color:#414040; height:150px; border:1px solid #000000; ">

         <?php include('footer.php'); ?>

         </div><!--footer close-->

     </div> <!--center close-->

           </div><!--main close-->

           





</body>

</html>



