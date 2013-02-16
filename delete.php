<html>
<head><title>delete</title>
</head>
<body>
<?php
include("connect.php");
mysql_select_db("db");
$id=$_REQUEST['id'];
$result=mysql_query("SELECT * FROM table1 WHERE id='$id'");
$rows=mysql_fetch_array($result);
?>
<table border=1 align="center">
<form method="post" action="do_delete.php">
<tr>
    <td><input type="hidden" name="id" value="<?php echo $rows['id']; ?>"></td>
</tr>
<tr><td>Name</td>
    <td><input type="text" name="name" value="<?php echo $rows['name']; ?>"></td>
</tr>
<tr><td>E-mail</td>
    <td><input type="text" name="email" value="<?php echo $rows['email']; ?>"></td>
</tr>
<tr><td>Age</td>
    <td><input type="text" name="age" value="<?php echo $rows['age']; ?>"></td>
</tr>
<tr><td><input type="submit" name="submit" value="Delete"></td>
    <td><input type="reset" name="reset" value="Clear"></td>
</tr>	
</form>
</table>
<?php mysql_close($con); ?>