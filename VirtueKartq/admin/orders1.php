<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>The Revolution</title>
</head>

<body>
	<td  align="center" width="400"  >
    <div style="height:550px;overflow:auto;">
    <table border="1" width="100%">
    <tr bgcolor="#993300" style="color:#FFF;">
    <td>ITEM</td>
    <td width="20">QTY</td>
    <td width="30">PRICE</td>
    <td width="30">TOTAL</td>
    <td>BUYER</td></tr>
    
   <?php
   	include("dbconnection.php");
   //mysql_connect("$host", "$user", "$pass") or die (mysql_error());	
    //mysql_select_db("$db") or die(mysql_error());
	
	
	if(isset($_REQUEST['orderno'])){						   
mysqli_query($bd,"update iorders set completed='YES' WHERE order_no='".$_REQUEST['orderno']."'");}

					
					
		
	    $strSQL = "SELECT * FROM iorders where completed='NO'";
		$rs = mysqli_query($bd,$strSQL);
	       while($row = mysqli_fetch_array($rs))
	                {
			echo"<tr><td>".$row['item_name']."</td>
			<td>".$row['quantity']."</td>
			<td>".$row['price']."</td>
			<td>".$row['total']."</td>
			<td>".$row['buyer_contacts']."<br>
			
			<a href=orders.php?e=".$username."&&orderno=".$row['order_no']." > 
			<font color=red>complete</font> </a>

</td></tr>";
		            
					}		        
   ?> 
    
    </table>
    
    </div>
	</td>
	
	  	 
	
	</tr>
	 
	</table>
	
</body>
</html>
