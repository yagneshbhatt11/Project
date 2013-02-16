<?php
include("connect.php");
mysql_select_db("db", $con);
$sql="INSERT INTO table1 (`name`,`email`,`age`)
VALUES
('$_POST[name]','$_POST[email]','$_POST[age]')";
if(!mysql_query($sql,$con))
{
echo("Error:" . mysql_error());
}
echo"Congratulation.Data Submitted";
echo"<br />";
echo"<a href='view.php'>Click to View Data</a>";
mysql_close($con);
?>