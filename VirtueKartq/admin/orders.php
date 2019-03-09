
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>The Revolution</title>
</head>

<body>
	<td  align="center" width="400"  >
    <div style="height:550px;">
    <table border="1" width="100%">
    <tr bgcolor="#993300" style="color:#FFF;">
    <td>Order No</td>
    <td>Item Name</td>
    <td width="30">Quantity</td>
    <td>Price</td>
    <td>Buyer Detail</td>
	<td>Completed</td>   
	<td width="80">Total</td> <!--
    <td>Buyer Details</td>
    <td>Completed</td>
    <td>Item Name</td>
    <td>Quantity</td>
    <td>Price</td>
    <td width="30">TOTAL</td>    
    </tr>-->
    <!--<tr>-->
   <?php
   	include("dbconnection.php");
   	$username="anil";
   //mysql_connect("$host", "$user", "$pass") or die (mysql_error());	
    //mysql_select_db("$db") or die(mysql_error());
	
	/*
	if(isset($_REQUEST['orderno'])){						   
mysqli_query($bd,"update iorders set completed='YES' WHERE orderno='".$_REQUEST['orderno']."'");}*/

					
					
		
	    $strSQL = "SELECT * FROM iorders where completed='NO'";
		$rs = mysqli_query($bd,$strSQL);
			 $i=1;$orno;
            $amt=0;	
	       while($row = mysqli_fetch_array($rs))
	                {
	                	$orno=$row['orderno'];
	                	$_SESSION['var']=$orno;
			echo"<tr>
			<form method=POST>
			<td><center>".$row['orderno']."</center></td>
			<td><center>".$row['itemname']."</center></td>
			<td><center>".$row['quantity']."</center></td>
			<td><center>".$row['price']."</center></td>
			<td>".$row['buyerdetails']."</td>
			<td><center>".$row['completed']."</center><br>
			

			<center> "
			?>
				<a href="orderdel.php?code6=<?php echo $row['orderno'];?>">
			<input type=button value=Complete name=comp></a>

			<?php echo "</center>

			</form>

			</td>
			
			<td><center>".$row['quantity']*$row['price']."</center><br>
			</td></tr>";
			$pq=$row['quantity']*$row['price'];
					$i=$i+1;

$amt=$amt+$pq;
$_SESSION['amt']=$amt;
}echo "<tr><td colspan=7 align=right>".$amt."</td></tr>";
/*if(isset($_POST['comp']))
			{
				mysqli_query($bd,"update iorders set completed='YES' WHERE orderno='".$orno."'");
	
			}*/

					/*$strSQL= "SELECT * FROM iorders where completed='NO'";
					$rs = mysqli_query($bd,$strSQL);


	       
	       while($row = mysqli_fetch_array($rs))
	                {
			echo"<tr>
			<td>".$row['orderno']."";

					}*/
					/*$i=0;
					$strSQLT9="SELECT * FROM shopping_cart";
					$rsT9=mysqli_query($bd,$strSQLT9);

					while($row9=mysqli_fetch_array($rsT9))
					{
						/*echo "<tr><td>".$row1['productname']."</td>
			<td>".$row1['quantity']."</td>
			<td>".$row1['price']."</td>";*/
		/*	$i=$i+1;
					}

					$i=$i+1;
					$strSQL2= "SELECT * FROM iorders where completed='NO'";
					$rs2 = mysqli_query($bd,$strSQL2);

					while($row2 = mysqli_fetch_array($rs2))
	                {
			echo "<td rowspan=".$i.">".$row2['buyerdetails']."</td>
			<td rowspan=".$i.">".$row2['completed']."</td>
			";
					}

					$strSQLT1="SELECT * FROM shopping_cart";
					$rsT=mysqli_query($bd,$strSQLT1);

					while($row1=mysqli_fetch_array($rsT))
					{
						echo "<tr><td>".$row1['productname']."</td>
			<td>".$row1['quantity']."</td>
			<td>".$row1['price']."</td>";
			$i=$i+1;
					}

					$strSQL3= "SELECT * FROM iorders where completed='NO'";
					$rs3 = mysqli_query($bd,$strSQL2);

					while($row3 = mysqli_fetch_array($rs3))
	                {
			echo "
			<td rowspan=".$i.">".$row3['total']."<br>
			</td>";
					}
			echo $i;
*/

?><!--</tr>-->

<!--
			<a href=orders.php?e=".$username."&&orderno=".$row['orderno']." > 
			<font color=red>complete</font> </a>-->

		            
							        
  
    
    </table>
    
    </div>
	</td>
	
	  	 
	
	</tr>
	 
	</table>
	
</body>
</html>
