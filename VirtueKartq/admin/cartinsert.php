<?php
@$code=$_GET['code1'];



?>

<?php 
include('dbconnection.php');
$que="insert into product1 ('product_code','product_name','price','image1') select product_code, product_name,price,image1 where product_code='$code'" ;
			 $res=mysql_query($que);
			 if($res)
			 {
			 echo "";
			 			 }



 ?>
