<html>
<head>
<title>Search Ressult</title>
</head>
<body>
<?php
include("connect.php");
mysql_select_db("db");
if($find=="")
 { 
  echo"Enter search term";
  exit;
 }
 $find=strtoupper($find);
 $find=trim($find);
 $sql=mysql_query("SELECT * FROM table1 WHERE upper($field) LIKE '%$find%'");
 while($result=mysql_fetch_array($sql))
  {
  echo $result['name'];
  echo"<br />";
  echo $result['email'];
  echo"<br />";
  echo $result['id'];
  echo"<br />";
  } 
$x=mysql_num_rows($sql);
if($x==0)
 { echo"Sorry we cannot find data";
} 
?>