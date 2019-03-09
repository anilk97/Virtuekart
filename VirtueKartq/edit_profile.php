<?php

	session_start();

	

	$email=$_SESSION['email'];

	include("dbconnection.php");

	$query="select * from  user_details where email='$email'";

	$result=mysqli_query($bd,$query);

	$cnt=mysqli_num_rows($result);

	if($cnt>0)

	{

		while($data=mysqli_fetch_array($result))

		{

				$user_data[]=$data;

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

 <script type="text/javascript" src="clients.js"></script>



<script type="text/javascript">



function validate()

{

	if (document.form1.name.value=="")

	

	{

		alert("Name Is Required!");

		document.form1.name.focus();

		return false;

		}

		if(document.form1.email.value=="")

		{ alert("Email Is Required");

		document.form1.email.focus();

		return false;

		}

		if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(form1.email.value))  

  {  

  }  

   else

   {

	    alert("Entered an invalid email address!")  

		document.form1.email.focus();

    	return (false);

 	}

	



		

		

		if(document.form1.contact.value=="")

		{ alert("Contact No Is Required");

		document.form1.contact.focus();

		return false;

		}

	

		if(  /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/.test(form1.contact.value))

		{

		}

		else

		{

		 alert("Entered an invalid Contact number")  

		document.form1.contact.focus();

    	return (false);

		}

		

				

		

	}

		

		

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

            <table style="height:auto; width:1050px; margin:auto;   border:0px solid #000000; background-color:#FFFFFF; ">

           <tr><td> <div style="height:35px; width:1050px; border:0px solid #000000; margin-top:10px; background-color:#D3D1D1; border-radius:5px; color:#1C7582;">

         <font style=" font-size:18px; margin-left:10px;"><b>My Account</b></font>

            </div>

            <div style="margin-top:5px;  border:0px solid #CC0000;">

            

           <div style="width:200px; height:248px;background-color:#FFFFFF;border:1px #CCCCCC solid;float:left;"><?php include('left.php'); ?></div>

            

            <!--registration form--><div style="border:1px solid #DADADA; border-radius:5px; height:350px; width:600px; float:left; margin-left:50px; margin-top:20px;">

            

            

            <form name="form1" method="post" onSubmit="return validate();">

            <table border="0" style="width:600px;" cellspacing="12">

            <tr style="background-color:#CDEFF3; color:#828282;; height:30px;"><td colspan="2"><b>Contact Information</b></td></tr>

            <tr>

            

            <td>Name*</td><td><input type="text" name="name" value="<?php foreach($user_data as $ud){ echo "$ud[1]";} ?>" style="width:300px; height:25px;"></td>

            </tr>

            <tr>

            <td>E-Mail Id*</td><td><input type="text" name="email" value="<?php foreach($user_data as $ud){ echo "$ud[2]";} ?>" style="width:300px; height:25px;"></td>

            </tr>

            

            <tr>

            <td>Contact Number*</td><td><input type="text" name="contact" value="<?php foreach($user_data as $ud){ echo "$ud[3]";} ?>" style="width:300px; height:25px;"></td>

            </tr>

          

            <tr><td colspan="2" align="right"><input type="submit" name="update" value="Continue" style="border:1px solid #999999; border-radius:5px; height:35px; width:80px; font-size:16px; margin-right:25px; background-color:#74DBCF;" align="middle"></td></tr>

            

            

            </table></form>

            

            </div><!--registration form-->

              

              </td></tr>         

             </table>  

             <?php

			include ('dbconnection.php');

	if($_POST['update'])

	{

	

		$email=$_SESSION['email'];

		$Name=$_POST['name'];

		$Contact=$_POST['contact'];

		$query="update user_details set name='$Name',email='$email',contact='$Contact' where email='$email'";

		$res=mysql_query($query);

		if($res)

		{

			echo "<script>alert('success')</script>";

		}

else

{

echo "<script>alert('you entered wrong details')</script>";

}

        }

		?>             

                       

       <!--slider down close-->

        <div style="height:30px; width:1050px; margin:auto; border:0px solid #000000;">

         <?php include('marquee.php'); ?>

        

        </div>

         

       <!--footer--><div style="width:100%; background-color:#414040; height:108px; border:1px solid #000000; ">

         <?php include('footer.php'); ?>

         </div><!--footer close-->

     </div> <!--center close-->

           </div><!--main close-->





</body>

</html>

