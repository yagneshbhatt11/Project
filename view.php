<html>
<head>
<title>View Data</title></head>
<body>
<?php
include("connect.php");
mysql_select_db("db",$con);
$result=mysql_query("SELECT * FROM table1");
?>
<table border=1 align="center">
<tr>
<td>Name</td>
<td>E-mail</td>
<td>Age</td>
<td>Update</td>
<td>Delete</td>
</tr>
<?php
while($rows=mysql_fetch_array($result))
 {?>
  <tr>
  <td><?php echo $rows['name']; ?></td>
  <td><?php echo $rows['email']; ?></td>
  <td><?php echo $rows['age']; ?></td>
  <td><a href="update.php?id=<?php echo $rows['id']; ?>">Update</a></td>
  <td><a href="do_delete.php?id=<?php echo $rows['id']; ?>">Delete</a></td>
  </tr>
  <?php
  }
?>
</table>
<center><a href="form.html">Click for main Page</a></center>
<?php mysql_close($con); ?>
</body>
</html>
