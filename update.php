<html>
<head><title>Update</title>
<script type='text/javascript'>
function notEmpty(elem, helperMsg){
	if(elem.value.length == 0){
		alert(helperMsg);
		elem.focus();
		return false;
	}
	return true;
}
</script>
</head>
<body>
<?php
include("connect.php");
mysql_select_db("db",$con);
$id=$_REQUEST['id'];
$result=mysql_query("SELECT * FROM table1 WHERE id='$id'");
$rows=mysql_fetch_array($result);
?>
<table border=1 align="center">
<form method="post" action="do_update.php">
<tr>
    <td><input type="hidden" name="id" value="<?php echo $rows['id']; ?>"></td>
</tr>
<tr><td>Name</td>
    <td><input type="text" name="name" value="<?php echo $rows['name']; ?>" id="name"></td>
</tr>
<tr><td>E-mail</td>
    <td><input type="text" name="email" value="<?php echo $rows['email']; ?>" id="name"></td>
</tr>
<tr><td>Age</td>
    <td><input type="text" name="age" value="<?php echo $rows['age']; ?>" id="name"></td>
</tr>
<tr><td><input type="submit" name="submit" value="Update" onClick="notEmpty(document.getElementById('name'), 'Please Enter a Value')"></td>
    <td><input type="reset" name="reset" value="Clear"></td>
</tr>	
</form>
</table>
<?php mysql_close($con); ?>
</body>
</html>