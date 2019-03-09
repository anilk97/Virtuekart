
    
   <?php

   	include("dbconnection.php");
   //mysql_connect("$host", "$user", "$pass") or die (mysql_error());	
    //mysql_select_db("$db") or die(mysql_error());
	$orno=$_SESSION['var'];
	echo $orno;
	//if(isset($_POST['comp'])){						   
    //mysqli_query($bd,"update iorders set completed='YES' WHERE order_no='".$orno."'");
	/*if($r)
	{
		echo "<script>alert("Data has been Updated")</script>":

	}
	else {
		echo "<script>alert("Data has not been Updated")</script>":
		
	}*/}
		  //mysqli_query($bd,"update iorders set completed='YES' ");}

					
					
		/*
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
		            
					}	*/	        
   ?> 