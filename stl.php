<!DOCTYPE html>
<html>
<head>
<title> Student info</title>
</head>
<style>
	.container {
	text-align: center;
  position: relative;
}
.center {
	 background-image: linear-gradient(to bottom, rgba(135,206,235,1), rgba(135,206,235,0));
	outline: 7px solid black;
	width: 980px;
	height: 480px;
	
	 
	text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 18px;
}


img { 
  width: 100%;
  height: auto;
  opacity: 0.4;
}
</style>
<body >
	<div class="container">
	<center>
		<img src="gap2.jpg" height="1000" width="100">
		<div class="center" align="center">
<h1>SELECT THE SECTION STATUST YOU WANT TO CHECK</h1>

<?php
error_reporting(0);
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'college');
if(isset($_POST['Login']))
{
$prn_no = $_POST['prn_no'];
$password = $_POST['password'];

{
 $query = "SELECT * FROM stu_info WHERE prn_no='$prn_no' and password ='$password' ";
 $query_run = mysqli_query($connection,$query);
 while ($row = mysqli_fetch_array($query_run)) {
?><table align="center">
<form action="" method="POST">
<tr><td>PRN NO :</td><td><input type="text" name="prn_no"  readonly="readonly" value="<?php echo $row['prn_no'] ?>" /></td></tr><br>
<tr><td>
NAME :</td><td><input type="text" name="name"  readonly="readonly"  value="<?php echo $row['name'] ?>" /></td></tr><br>
	<tr><td>
	CLASS NAME :</td><td><input type="text"  readonly="readonly"  name="class" value="<?php echo $row['class'] ?>"/></td><br>
	<tr><td>
	ADMISSION YEAR :</td><td><input type="text"   readonly="readonly" name="admission_year" value="<?php echo $row['admission_year'] ?>"/></td></tr><br>
	<tr><td>
	USERNAME :</td><td> <input type="text"   readonly="readonly" name="username" value="<?php echo $row['username'] ?>"/></td></tr><br>
	<tr><td>
	DEPARTMENT :</td><td><input type="text" name="department"   readonly="readonly"  value="<?php echo $row['department'] ?>"/></td></tr><br>
	<input type="hidden" name="password" value="<?php echo $row['password'] ?>"/><br>
	
</form>
<?php
 }
 }
}

?>

<table cellspacing="30" align="center">
			<td>
	<form action="Library Status.php"><input type="Submit" name="  Library Status  " value="  Library Status "></form></td>

<td>	<form action="Account Status.php"><input type="Submit" name="  Account Status " value="  Account Status  "></form>
	</td>
	<td><form action="Academic Status.php"><input type="Submit" name="  Academic Status" value="  Academic Status "></form></td>
	</table>
</div>
</div>
</center>
<table>
<tr>
<td>
<h2>Click here to go Back page ==>  </h2></td>
<td><form action="student login.php">
<input type="submit" name="Back" value="Back">
</form></td></tr>
</table>

</body>
</html>