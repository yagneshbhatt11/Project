<?php
include("connect.php");
if(mysql_query("CREATE DATABASE db",$con))
 {
 echo"database created";
 }
 else
 {
 echo("Error in creating database: " . mysql_error());
 }
mysql_close($con);
?> 