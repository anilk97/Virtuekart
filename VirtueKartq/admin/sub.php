<?php session_start();



if($_SESSION['name'])

{

 ?>

 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>The Revolution</title>



<link rel="stylesheet" href="style.css" type="text/css" />

<script type="text/javascript" src="nicEdit.js"></script>

<script type="text/javascript">

	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });

</script>

</head>



<body style="background-color:#EFEFEF;">

 <div style="width:1050px; height:120px; margin:auto;border:#CCCCCC 1px solid;"><?php include('header.php');?>

  </div>

  <!--middle-->

      <div style="width:1050px; height:auto; margin:auto;border:#000099 0px solid;">

	   

<!--left-->

 <div style="width:200px; height:auto;border:#000099 0px solid;"><?php include('left.php'); ?></div>

<!--right-->

<div style="width:810px; height:605px; float:left; margin:auto; ">

	

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