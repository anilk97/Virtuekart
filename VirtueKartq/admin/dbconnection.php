<?php
$mysql_hostname = "localhost";
$mysql_user ="root";
$mysql_password ="";
$mysql_database ="virtuekartq";
$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("oops !Could not connect database");
mysqli_select_db($bd,$mysql_database) or die("opps! database not connected");

?>
