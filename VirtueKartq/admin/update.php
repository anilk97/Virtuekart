<?php session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ShoppingMyChoice</title>

<link rel="stylesheet" href="style.css" type="text/css" />


</head>
<body>
<?php include('header.php');?>
  <!--middle-->
      <div style="width:1050px; height:auto; margin:auto;border:#000099 1px solid;">
	   
<!--left-->
<div ><?php include('left.php'); ?></div>
<!--right-->
<div style="width:400px; height:auto; float:left; margin:auto; border:1px solid #999999; border-radius:5px; margin-top:5px; ">

 <div style=" width:400px; float:left; height:60px;  border:solid 0px #999900; " >

<link rel="stylesheet" href="css_middle/style.css" type="text/css" />
<style type="text/css">
._css3m{display:none}
</style>
<ul id="css3menu11" class="topmenu" style="margin-top:18px; margin-left:8px;">
	<li><a href="insert.php" style="height:40px;line-height:40px; font-size:11px; width:105px; border-radius:10px 10px 1px 1px; border:#000000 0px solid;"><center><div style="padding-left:2px;"><b>Insert</b></div></center></a></li>

	<li class="toplast"><a href="update.php" style="height:40px;font-size:11px;line-height:40px;margin-left:2px; width:100px;border-radius:10px 10px 1px 1px;"><center><div style="padding-left:2px;background-color:#000000; color:#FFFFFF; "><b>Update</b></div></center></a></li>

    <li class="topmenu"><a href="delete.php" style="height:40px;line-height:40px;font-size:11px;margin-left:2px; width:100px;border-radius:10px 10px 1px 1px; "><center><div style="padding-left:2px;"><b>Delete</b></div></center></a></li>
 
</ul></div>
    
<div style=" width:400px; float:left; height:auto;  border:solid 0px #999900;" align="center">
<form name="form2" action="update1.php" method="post" style="margin:auto;" >
              <table width="300" style="margin-top:20px;" border="0">
            
              
               <tr >
                <td  style="width:10px; font-size:14px;">category: </td>
                <td ><select name="category" style="width:155px;"/>
						<option value="0">select one</option>
						<option  value="mobile">mobile</option>
						<option value="tv">tv</option>
						<option value="camera">camera</option>
                        <option value="music">music<option>
						<option value="laptop">laptop</option>
						<option value="game">game</option></select>
					</td>
                            
      
             </tr>
         <td colspan="2" align="center"> <input type="submit" name="submit" value="submit" style="width:100px; height:25px; color:#FFFFFF; border:#FFFFFF 1px solid; background-color:#006699; border-radius:5px;"></td></tr>
            
     </table>
</form>


</div>    
    
    
    
    </div>
</div>


</div>
</div>
</body>
</html>
