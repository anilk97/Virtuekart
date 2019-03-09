<?php

	session_start();

	$codelp=$_GET['code6'];

 ?>

<?php

	include 'dbconnection.php';

	//$query="delete from iorders where ser_no='".$code."'";
	$qy="update iorders set completed='YES' WHERE orderno='".$codelp."'";
	$sum=mysqli_query($bd,$qy);

	if($sum)

	{

		header('location:orders.php' );

	}

?>