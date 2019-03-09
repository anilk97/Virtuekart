<?php 
include('header.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Add a new Address</h2>
  <form method="post" enctype="multipart/form-data">
    <div class="form-group" >
      <label for="nm">Full name:</label>
      <input type="text" class="form-control" id="nm" placeholder="Enter your name" name="name" autofocus required>
    </div>
	
	<div class="form-group">
      <label for="num">Contact number:</label>
      <input type="number" class="form-control" id="num" placeholder="Enter you contact number" name="number"  minlength="10" maxlength="10"  autocomplete="on"  required>
    </div>
	
	<div class="form-group">
      <label for="pin">Pincode:</label>
      <input type="number" class="form-control" id="pin" placeholder="Enter your pincode" name="pincode" minlength="6" maxlength="6" autocomplete="on" required>
    </div>
	
	<div class="form-group">
      <label for="flat">Flat,House no.,Building,Company,Apartment:</label>
      <input type="text" class="form-control" id="flat" placeholder="Enter your House no." name="flat" autocomplete="on" required>
    </div>

	<div class="form-group">
      <label for="Area">Area/colony:</label>
      <input type="text" class="form-control" id="Area" placeholder="Enter your Area" name="colony" required>
    </div>	
	
		<div class="form-group">
      <label for="Land">Landmark:</label>
      <input type="text" class="form-control" id="land" placeholder="E.g. near Bharti Chowk,Behind Laxmi Temple,etc." name="landmark" required>
    </div>
	
		<div class="form-group">
      <label for="tw">Town/City:</label>
      <input type="text" class="form-control" id="tw" placeholder="Town/City" name="town" required>
    </div>
	
	
	
    <div class="form-group">
      <label for="st">State:</label>
      <input type="text" class="form-control" id="st" placeholder="Enter your state" autocomplete="on" name="state" required>
    </div>
    <!--<input type="submit" name="g" value="Insert" style="width:100px; height:25px; color:#FFFFFF; border:#FFFFFF 1px solid; background-color:#006699; border-radius:5px;">-->
   <button type="submit" name="g" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>

<?php 
include("dbconnection.php");
if(isset($_POST["g"]))
  {
    $nam=$_POST['name'];
    $numbe=$_POST['number'];
    $pincod=$_POST['pincode'];
    $fla=$_POST['flat'];
    $colon=$_POST['colony'];
    $landmar=$_POST['landmark'];
    $tow=$_POST['town'];
    $stat=$_POST['state'];

    $query="insert into user_info (fullname,contactno,pincode,flatno,area,landmark,town,state) values('$nam','$numbe','$pincod','$fla','$colon','$landmar','$tow','$stat')";


   
    $result=mysqli_query($bd,$query);



    $address="<b>Name : </b>".$nam."<br><b>Address : </b>".$fla." ,".$colon.",".$landmar.",".$tow." ,".$stat." "."<br><b>Pincode : </b>".$pincod."<br><b>Contact Number : </b>".$numbe;
    //$query="insert into iorders (buyerdetails) values('$address')";


   
   // $result=mysqli_query($bd,$query);

  
    $qu="select * from shopping_cart";
        $res=mysqli_query($bd,$qu);
        while($row=mysqli_fetch_array($res))
        {
          $itemname=$row['product_name'];
          $qty=$row['quantity'];
          $price=$row['price'];
          //$code =$row['product_code'];
        
        //$st="insert into iorders(itemname,quantity,price) values('$itemname','$qty','$price')";
      
        $st="insert into iorders(itemname,quantity,price,buyerdetails) values('$itemname','$qty','$price','$address')";
        // $st="insert into iorders values('$itemname','$qty','$price')";
        $bn=mysqli_query($bd,$st);}
       
        

    if($result)
     {  echo "<script>alert('record inserted')</script>";   }

    else      {   echo "<script>alert('record not inserted')</script>";  }

}



?>
