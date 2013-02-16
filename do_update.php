<html>
<head>
<title>do update</title>
<cript type="text/javascript ">
</head>
<body>
<?php
include("connect.php");
mysql_select_db("db",$con);
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$age=$_REQUEST['age'];
$id=$_REQUEST['id'];
//Do query
$sql="UPDATE table1 SET name='$name',email='$email',age='$age' WHERE id=".$id;
$result=mysql_query($sql);
if($result)
 {
 echo"Updated Successfully";
 echo"<br />";
 echo"<a href='view.php'>Click to view</a>";
 }
 else {echo "error";}
 mysql_close($con); 
?>