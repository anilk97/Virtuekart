<?php session_start();



if($_SESSION['name'])

{
if($_GET['update'])
{

include('dbconnection.php');

mysqli_query($bd,"update static set details ='" .($_POST['txt']). "' where static_id='".$_GET['id']."'");

$update=mysqli_affected_rows($bd);





}

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Revolution</title>



<link rel="stylesheet" href="style.css" type="text/css" />



<script type="text/javascript" src="nicEdit.js"></script>

<script type="text/javascript">

	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });

</script>

</head>



<body style="background-color:#EFEFEF;">

<?php include('header.php');?>

  <!--middle-->

      <div style="width:1050px; height:auto; margin:auto;border:#000099 1px solid;">

	   

<!--left-->

<div style="float:left;" ><?php include('left.php'); ?></div>

<!--right-->



<div style="width:810px; height:auto; float:left; margin:auto; background-color:#FFF;">



	<?php

//if($update>=0)

echo	"<font color='none'>".$_SESSION['name']="Record updated"."</font>"; ?>

<form action="" method="post" >



<table>

<tr>



<td>

 <textarea name="txt"    style="width:795px; height:auto;">

<font style="font-family:Verdana, Geneva, sans-serif; color:#930;">

 <?php

			  

			   list($value)=mysqli_fetch_array(mysqli_query($bd,"select details  from static where static_id='".$_GET['id']."'"));

			   echo stripslashes($value);

			  

			  

			  ?></font>



</textarea></td>



</tr>

</table>

<input type="submit" name="update" value="UPDATE" />

</form>







    

    </div>

</div>





    

    

    <?php 

}

else

{

	header('Location:logout.php');

}



?>



</div>

</div>

</body>

</html>

