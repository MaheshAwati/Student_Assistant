<!DOCTYPE html>
<html>
<head>
	<title>academic status</title>
</head>
<style>
	.container {
	text-align: center;
  position: relative;
}
.center {
	 background-image: linear-gradient(to bottom, rgba(135,206,235,1), rgba(135,206,235,0));
	outline: 7px solid black;
	width: 400px;
	height: 300px;
	
	 
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
<body>
	<div class="container">
	
	<center>
		<img src="gap2.jpg" height="1000" width="100">
		<div class="center" align="center">
<h1>Academic Details</h1>
<?php
error_reporting(0);
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'college');
if(isset($_POST['Login']))
{
$prn_no = $_POST['prn_no'];
$password = $_POST['password'];

 $query = "SELECT * FROM academic WHERE prn_no='$prn_no'  ";
 $query_run = mysqli_query($connection,$query);
 while ($row = mysqli_fetch_array($query_run)) {
?><table>
<form action="" method="POST">
<tr><td>PRN NO :</td><td><input type="text" name="prn_no"  readonly="readonly" value="<?php echo $row['prn_no'] ?>" /></td></tr><br>
	
<tr><td>
ATTENDANCE : </td><td><input type="text" name="attendence"  readonly="readonly"  value="<?php echo $row['attendence'] ?>" /></td></tr><br>
	<tr><td>
	RESULT :</td><td><input type="text"  readonly="readonly"  name="result" value="<?php echo $row['result'] ?>"/></td></tr><br>
	
	
	
</form>
</table>
<?php
 }
}
?>

</center>
<table>
<tr>
<td>
<h2>Click here to go Back page ==>  </h2></td>
<td><form action="stl.php" >
<input type="submit" name="Back" value="Back">
</form></td></tr>
</table>
</div>
</div>
</body>
</html>