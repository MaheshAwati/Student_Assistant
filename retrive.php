<!DOCTYPE html>
<html>
<head>
	<title>Student Login</title>
</head>
<body bgcolor="Red">

	<center>
		<img src="Fabtech.jpg" height="350" width="1350">
<h1>STUDENT LOGIN</h1>
<form  action="" method="POST">
<p>PRN NO: <input type="prn_no" name="prn_no" placeholder="Enter you PRN NO" ></p>
<p>Password:<input type="password" name="password" placeholder=" Enter your password"></p>
<p><input type="submit" value="Login" name="Login"></p>
</form>
<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'college');
if(isset($_POST['Login']))
{
	$prn_no = $_POST['prn_no'];
$password = $_POST['password'];
 $query = "SELECT * FROM stu_info WHERE prn_no='$prn_no' and password ='$password' ";
 $query_run = mysqli_query($connection,$query);
 while ($row = mysqli_fetch_array($query_run)) {
?>
<form action="" method="POST">
	<input type="text" name="prn_no"  readonly="readonly" value="<?php echo $row['prn_no'] ?>" /><br>
	<input type="text" name="class" value="<?php echo $row['class'] ?>"/><br>
	<input type="text" name="admission_year" value="<?php echo $row['admission_year'] ?>"/><br>
	<input type="text" name="username" value="<?php echo $row['username'] ?>"/><br>
	<input type="text" name="password" value="<?php echo $row['password'] ?>"/><br>
	<input type="text" name="department" value="<?php echo $row['department'] ?>"/><br>
<input type="hidden" name="name" value="<?php echo $row['name'] ?>" /><br>
	
</form>
<?php
 }
}
?>
</center>
<table>
<td>
<h2>Click here to go home page ==>  </h2></td>
<td><form action="COLLAGE ASSISTAN.html" >
<input type="submit" name="Home" value="Home">
</form></td>
</table>
</body>
</html>