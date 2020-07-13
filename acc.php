<!DOCTYPE html>
<html>
<head>
	<title>account status</title>
</head>
<style>
	.container {
	text-align: center;
  position: relative;
}
.center {
	 background-image: linear-gradient(to bottom, rgba(135,206,235,1), rgba(135,206,235,0));
	outline: 7px solid black;
	width: auto;
	height: autopx;
	
	 
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
<h1>Acount Details</h1>
<?php
error_reporting(0);
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'college');
if(isset($_POST['Login']))
{
$prn_no = $_POST['prn_no'];
$password = $_POST['password'];

{
 $query = "SELECT * FROM account WHERE prn_no='$prn_no' ";
 $query_run = mysqli_query($connection,$query);
 while ($row = mysqli_fetch_array($query_run)) {
?>
<table align="center">
<form action="" method="POST">

<tr><td>PRN NO :</td><td><input type="text" name="prn_no"  readonly="readonly" value="<?php echo $row['prn_no'] ?>" /></td></tr><br>

<tr><td>
ACCOUNT FINE :</td><td><input type="text" name="acfine"  readonly="readonly"  value="<?php echo $row['acfine'] ?>" /></td></tr><br>
	<tr><td>
	LIBRARY FINE :</td><td><input type="text"  readonly="readonly"  name="lbfine" value="<?php echo $row['lbfine'] ?>"/></td></tr><br>
	<tr><td>
	TOTAL FEE :</td>
	<td><input type="text"   readonly="readonly" name="totalf" value="<?php echo $row['totalf'] ?>"/></td></tr><br>
	<tr><td>
	PAID AMMOUNT :</td>
	<td><input type="text"   readonly="readonly" name="paidamt" value="<?php echo $row['paidamt'] ?>"/></td></tr><br>
	<tr><td>
	REMAINING FEE :</td>
	<td><input type="text"   readonly="readonly" name="remaining_fee" value="<?php echo $row['remaining_fee'] ?>"/></td></tr><br>

	
</form>

<?php
 }
 }
}
?>
</div>
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
</body>
</html>