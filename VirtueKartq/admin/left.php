<div style="width:200px; height:auto; float:left; margin:auto;color:#271CFB; border:1px #CCCCCC solid;background-color:#CFCFCF;">

<table >

 <tr><td>

 

 

 <a href="logout.php" style="text-decoration:none; color:#000000;">

 Logout</a></td></tr>

 <tr><td><a href="changepassword.php" style="text-decoration:none; color:#000000;">ChangePassword</a><hr /></td></tr></table>

 



<form action="left.php" method="post">

<b>STATIC PAGE</b>

<table>

<?php 

include('dbconnection.php');

$nice=mysqli_query($bd,"select * from static");

while($way=mysqli_fetch_array($nice))

{

?>

<tr>

<td><a href="page.php?id=<?php echo $way['static_id'];?>" style="font-family:Tahoma, Geneva, sans-serif;text-decoration:none;color:#000000;" ><?php echo $way['page'];?></a></td>

</tr>

<?php 

}?>

</table>







</form>

<table style="border:0px solid #330033; margin-top:40px;">

         

<tr><td><a href="insert.php" style="text-decoration:none; font-size:20px;">Product</a></td></tr>
<tr><td><a href="orders.php" style="text-decoration:none; font-size:20px;">Orders</a></td></tr>

   </table>   



         

       

     

</div>