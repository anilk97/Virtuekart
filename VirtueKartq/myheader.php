<!--main-->
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>	
<style type="text/css">
<!--
.style1 
{
	color:#999999;
	font-weight: bold;
	font-family: "Times New Roman", Times, serif;
}
.style2 {font-size: 9px}
-->
</style>
<div style="height:118px; width:1150px; margin:auto; border:0px solid #990000;">
<!--logo-->
<div style="width:160px; height:120px; float:left; margin-left:0; border:0px solid #FFF;"><a href="index.php"><img src="images/logo3.png"  height="150" width="150"/></a></div>
<!--logo close-->
<!--right-->
<div style="height:115px; width:990px; margin-top:0px; border:0px solid #FF0000; float:left;">
<!--menu-->
<div style="width:900px; height:30px; float:left; border:0px solid #CCCC00; font-size:12px;" align="right">


<!-- Upper Menu -->
 <a href="index.php" style="text-decoration:none;color:#FFFFFF;"><img src="images/home.png" height="40" width="63" /></a>&nbsp;  &nbsp;-->
<a href="myaccount.php" style="text-decoration:none;color:#FFFFFF;"><input type="button" value="My Account" style="border-radius:5px; background-color:#269FB2;; border:0px solid #0033FF;font:'Courier New', Courier, monospace'; height:22px; color:#FFFFFF;"></a>&nbsp;   &nbsp;
<a href="admin/index.php" style="text-decoration:none;color:#FFFFFF;"><input type="button" value="Admin Login" style="border-radius:5px; background-color:#269FB2;; border:0px solid #0033FF; font:'Courier New', Courier, monospace'; height:22px; color:#FFFFFF;"></a>&nbsp;   &nbsp;
<a href="cartdetails.php" style="text-decoration:none;color:#FFFFFF;"><input type="button" value="MY CART" style="border-radius:5px; background-color:#269FB2;; border:0px solid #0033FF;font:'Courier New', Courier, monospace'; height:22px; color:#FFFFFF;"></a>&nbsp;   &nbsp;
<a href="signup.php" style="text-decoration:none;color:#FFFFFF;"><input type="button" value="SIGN UP" style="border-radius:5px; background-color:#269FB2;; border:0px solid #0033FF;font:'Courier New', Courier, monospace'; height:22px; color:#FFFFFF;"></a>&nbsp;   &nbsp;


                  <!--<img onclick="startDictation()" name="search" src="cHidSVu.gif" />-->
                  <button onclick="startDictation()" name="search"> click</button>

<!--End of Upper Menu-->

<?php


if(isset($_SESSION['email'])&&isset($_SESSION['pwd']))
{
	?>


 <a href="logout.php" style="text-decoration:none"><input type="button" name="signin" value="SIGN OUT" style="border-radius:5px;  color:#FFFFFF; border:0px solid #FFFFFF; background-color:#269FB2; font:'Courier New', Courier, monospace;height:25px; box-shadow: 0px 0px 10px #CCCCCC;"></a>


 <?php
}
else
{
	?>
  
   <a href="login.php" style="text-decoration:none;color:#FFFFFF;"><input type="button" value="SIGN IN" style="border-radius:5px; background-color:#269FB2;; border:0px solid #0033FF;font:'Courier New', Courier, monospace'; height:22px; color:#FFFFFF;"></a>&nbsp;   &nbsp;

   <?php
    }
?>


<form id="signup" method="get" action="signup.php"></form>
<form id="mycart" method="get" action="cartdetails.php"></form>
<form id="myaccount" method="get" action="myaccount.php"></form>
<form id="x" method="get" action="results1.php"></form>


<form action="results1.php" id="labnol" method="get">
<div class="input-group">
<input type="hidden" name="search_param" value="all" id="search_param">         
                <input type="text" class="form-control" id="transcript" name="search_query" placeholder="Search for products,brands and more">
				
                <div class="input-group-btn">
                <button  class="btn btn-primary " onclick="searchButton" type="submit" name="bca"><i class="glyphicon glyphicon-search"  style="width:30px; height:18px;"></i></button>
                
<!-- HTML5 Speech Recognition API --><script>
  function startDictation() {

    if (window.hasOwnProperty('webkitSpeechRecognition')) {

      var recognition = new webkitSpeechRecognition();

      recognition.continuous = true;
      recognition.interimResults = true;

      recognition.lang = "en-US";
      recognition.start();

      recognition.onresult = function(e) {
        document.getElementById('transcript').value
                                 = e.results[0][0].transcript;
        recognition.stop();
         
    var PageName =document.getElementById('transcript').value;

        if (PageName == "sign in")
    document.getElementById('signin').submit(); 
    
else if (PageName == "sign up") 
         document.getElementById('signup').submit();
   
   else if (PageName == "my cart") 
         document.getElementById('mycart').submit();
   else if (PageName == "my account") 
         document.getElementById('myaccount').submit();
else if(PageName=="tv")
   document.getElementById('x').submit();
      
//else if (PageName=="voice mode")
  //      window.location="voice.php";
    //  else if(PageName=="stop voice mode")
      // { recognition.stop();}
    };
      recognition.onerror = function(e) {
        recognition.stop();
      }

    }
  }
</script>

</form>
       
				</div>
				</div>
   

 
</div>
<!--menu close-->
<div align="center" class="style1" style="height:90px; width:100px; border:0px solid #FF0000; float:left;"></div>


<span class="style2"></span>
<div style="border:0px solid #FF0000; width:400px; margin-top:30px; height:50px; float:left;" align="right">

<script>
  function searchButton(){
<?php
include 'dbconnection.php';?>
<?php
if(isset($_SESSION['email'] )&& isset($_SESSION['pwd']))
{

$email=$_SESSION['email'];
    $query="select * from user_details where email='$email'";
			 $result=mysqli_query($bd,$query);
			while($row=mysqli_fetch_array($result))

	      {
		  ?>
		  <p style="color:#FFFFFF; font-family:'Courier New'; margin-top:25px; font-size:22px;" align="right">
      <b>
      Welcome: 
      <font style="font-size:20px; font-family: 'Courier New', Courier, monospace" > &nbsp; 
             <?php echo $row['name'];?>
      </font>
      </b>
      </p>


          <?php
}
}
?>
}
</script>
</div>


</div><!--right close-->

</div><!--main close-->