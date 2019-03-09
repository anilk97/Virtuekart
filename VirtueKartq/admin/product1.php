<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>PHPGURUKUL Shopping</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="tabcontent.css" />

<script type="text/javascript" src="tabcontent.js">

/***********************************************

* Tab Content script v2.2- © Dynamic Drive DHTML code library (www.dynamicdrive.com)

* This notice MUST stay intact for legal use

* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code

***********************************************/

</script>

<!--  HTML CSS Template Designed by w w w . t e m p l a t e m o . c o m  --> 

</head>

<body>

 <form name="form2" action="product.php" method="post" style="margin:auto;">

<div style="margin: auto; height:auto; width: 1000px;">

 <!--************************Header********************************-->

                <?php include('header.php');?>

    <!--************************Header close********************************-->

     

	  <div style="width:1000px; height:800px; border:#ff0000 0px solid;background-color:#E6E6E6;">  

      <div style="width:200px; height:700px;border:#ff0000 0px solid; background-color:#E6E6E6; color:#ffffff; float:left; ">

        <?php include('left.php');?></div>

        <div style="width:400px;border:#ff0000 0px solid; float:left; margin-left:200px; margin-top:50px; height:auto;">

<form name="form2" action="product.php" method="post" style="margin:auto;">

              <table width="571">

             

              <tr>

                <td height="35" colspan="3" valign="top" style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif;

                  font-size:25px; color:#7A1D1F; border-radius:5px; border:1px solid #0000FF; background-color:#006699;" align="center">Product Insert Form</td>

              </tr>

              

               <tr>

                <td  style="width:10px; font-size:14px;">Product_Code:</td>

                <td width="349"><input type="text" name="pcode"/></td>

              </tr>



             <tr>

              <td>Product_Name:</td>

               <td width="349"><input type="text" name="pname"/></td>

             </tr>

             

             <tr><td>Product_category:</td><td width="349"><input type="text" name="pcat" /></td></tr>

              <tr><td>Product_Price:</td><td width="349"><input type="text" name="pprice"/></td></tr>

               <tr><td>Description:</td><td width="349"><input type="text" name="desc"/></td></tr>

                   <tr><td>Brand:</td><td width="349"><input type="text" name="brand"/></td></tr>

             <tr><td>Category:</td><td width="349"><input type="text" name="category"/></td></tr>

               <tr><td>Features:</td><td width="349"><input type="text" name="features"/></td></tr>

               <tr><td>Plateform:</td><td width="349"><input type="text" name="plateform"/></td></tr>

                 <tr><td>Model:</td><td width="349"><input type="text" name="model"/></td></tr>

                 <tr><td>Type:</td><td width="349"><input type="text" name="type"/></td></tr>

                 <tr><td>Display:</td><td width="349"><input type="text" name="display"/></td></tr>

                 <tr><td>Waranty:</td><td width="349"><input type="text" name="waranty"/></td></tr>

                    <tr><td>Shipping_time:</td><td width="349"><input type="text" name="shipping_time"/></td></tr>

                   <tr><td>Price:</td><td width="349"><input type="text" name="price"/></td></tr>

                    <tr><td>0ffer_price:</td><td width="349"><input type="text" name="offer_price"/></td></tr>

                <tr><td>Save:</td><td width="349"><input type="text" name="save"/></td></tr>

                <tr><td>Image:</td><td width="349"><input type="file" name="Iname"/></td></tr>

               <tr><td width="210"></td>

               <td ><input type="submit" name="btninsert" value="Insert" style="width:100px; height:25px; color:#FFFFFF; border:#FFFFFF 1px solid; background-color:#006699; border-radius:5px;"><input type="submit" name="btnupdate" value="update" style="width:100px; height:25px; color:#FFFFFF; border:#FFFFFF 1px solid; background-color:#006699; border-radius:5px;"></td></tr>



     </table>

</form>

</body>

</html>



<?php

include ('dbconnection.php');

if(isset($_POST["btninsert"]))

{ 

$pcode=$_POST['pcode'];

$pname=$_POST['pname'];

$pcat=$_POST['pcat'];

$price=$_POST['pprice'];

$desc=$_POST['desc'];

$brand=$_POST['brand'];

$category=$_POST['category'];

$features=$_POST['features'];

$plateform=$_POST['plateform'];

$model=$_POST['model'];

$type=$_POST['type'];

$display=$_POST['display'];

$waranty=$_POST['waranty'];

$shipping_time=$_POST['shipping_time'];

$price=$_POST['price'];

$offer_price=$_POST['offer_price'];

$save=$_POST['save'];



$image=$_POST['Iname'];



$query="insert into product values('','$pcode','$pname','$pcat','$price','$desc','$brand','$category','$features','$plateform','$model','$type','$display','$waranty','$shipping_time','$price','$offer_price','$save','')";





$result=mysql_query($query);

if($result)

{

	echo "<script>alert('record inserted');</script>".'<br>';

}

else

{

echo "<script>alert('record not insert');</script>".'<br>';

}

}



	

	

?>

