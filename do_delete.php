<html>
<head><title>Do-Delete</title>
</head>
<body>
<?php
include("connect.php");
mysql_select_db("db");
if(isset($_GET['id']))
 {
  $sql="DELETE FROM table1 WHERE id=".$_GET['id'];
  mysql_query($sql);
  header("location:view.php");
 }
mysql_close();
?>