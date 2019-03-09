<?php session_start(); ?>

<?php





if(isset($_SESSION['name']))

{

 include('dbconnection.php');

	     if(isset($_POST['sbt']))

	      {

			  $qry=mysql_query(" select password from login where password='".$_POST['oldpwd']."'");

			  $way=mysql_fetch_array($qry);

			  if($way>0)

			 if ($_POST["npwd"]==$_POST["cpwd"])

			 {

			  

			  $car=mysql_query("update login set password='".$_POST['npwd']."'". " where ser_no='1'");

			  

			  echo ("password successfully updated");

			  }

			  else

			  {

				  echo ("sorry Old password does not match!");

			  }

			  

			  

		  }

		

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>The Revolution</title>



<link rel="stylesheet" href="style.css" type="text/css" />



<script type="text/javascript">

function validate()

{

// name

  var v1=document.getElementById("oldpwd").value;

  if(v1==null || v1=="")

	{

	   alert("Please Enter Old Password");   

	   return false;

	}

        // name

  var v2=document.getElementById("npwd").value;

  if(v2==null || v2=="")

	{

	   alert("Please Enter New Password");   

	   return false;

	}

// name

  var v3=document.getElementById("cpwd").value;

  if(v3==null || v3=="")

	{

	   alert("Please Enter Confirm Password");   

	   return false;

	   

	}

	// name



  /*if(v2!=v3)

	{

	   alert("New Password & Confirm Password does not match!");   

	   return false;

	}*/





}





</script>



</head>

<body>

<?php include('header.php');?>

  <!--middle-->

      <div style="width:1050px; height:auto; margin:auto;border:#000099 1px solid;">

	   

<!--left-->

<div ><?php include('left.php'); ?></div>

<!--right-->

<div style="width:810px; height:auto; float:left; margin:auto; border:1px solid #999999; border-radius:5px; margin-top:5px; margin-left:5px; ">



 <form action="changepassword.php" method="post" name="form" >



<table style="margin-left:200px;margin-top:100px;" >

  <tr>

    <td width="174">Old Password</td>

    <td width="243"><input type="text" name="oldpwd" id="oldpwd" /></td>

  </tr>

  <tr>

    <td>New Password</td>

    <td><input type="text" name="npwd" id="npwd"/></td>

  </tr>

  <tr>

    <td>Confirm Password</td>

    <td><input type="text" name="cpwd" id="cpwd" /></td>

  </tr>

 

  <tr>

    <td height="35">&nbsp;</td>

    <td><input type="submit" name="sbt" id="sbt"  onclick="return validate();"/></td>

  </tr>

</table>



</form>



 

 

    

    

    

    </div>

</div>





</div>

</div>

</body>

</html>



<?php 

}

else

{

	header('Location:logout.php');

}



?>