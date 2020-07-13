<!DOCTYPE html>
<html>
<head>
	<title>library status</title>
</head>
<style>
	.container {
	text-align: center;
  position: relative;
}
.center {
	 background-image: linear-gradient(to bottom, rgba(135,206,235,1), rgba(135,206,235,0));
	outline: 7px solid black;
	width: 450px;
	height: 300px;
	
	 
	text-align: top;
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

<?php
error_reporting(0);
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'college');
if(isset($_POST['Login']))
{
$prn_no = $_POST['prn_no'];
$password = $_POST['password'];
{
 $query = "SELECT * FROM library WHERE prn_no='$prn_no' ";
 $query_run = mysqli_query($connection,$query);
 while ($row = mysqli_fetch_array($query_run)) {
?><table align="center">
<form action="" method="POST">
	<tr><td><h3>Library Details</h3></td></tr>
<tr><td>PRN NO :</td><td><input type="text" name="prn_no"  readonly="readonly" value="<?php echo $row['prn_no'] ?>" /></td></tr><br>
<tr><td>
BOOK ID :</td><td><input type="text" name="bookid"  readonly="readonly"  value="<?php echo $row['bookid'] ?>" /></td></tr><br>
	<tr><td>
	NO.OF BOOK ISSUE :</td><td><input type="text"  readonly="readonly"  name="noissue" value="<?php echo $row['noissue'] ?>"/></td></tr><br>
	<tr><td>
	ISSUE DATE :</td>
	<td><input type="text"   readonly="readonly" name="issuedate" value="<?php echo $row['issuedate'] ?>"/></td></tr><br>
	
</form>
</table>
<?php
 }
 }
}
?>
</div>
</center>
</div>
<table>
<tr>
<td>
<h2>Click here to go Back page ==>  </h2></td>
<td><form action="stl.php" >
<input type="submit" name="Back" value="Back">
</form></td></tr>
</table>
</body>
</html>