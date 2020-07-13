<?php
error_reporting(0);
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'college');
if(isset($_POST['Login']))
{
$prn_no = $_POST['prn_no'];
$password = $_POST['password'];
{
 $query = "SELECT * FROM stu_info WHERE prn_no='$prn_no'  ";
 $query_run = mysqli_query($connection,$query);
 while ($row = mysqli_fetch_array($query_run)) {
?><table>
<form action="" method="POST">
<tr><td>PRN NO :</td><td><input type="text" name="prn_no"  readonly="readonly" value="<?php echo $row['prn_no'] ?>" /></td></tr><br>

	
<tr><td>
BOOK ID :</td><td><input type="text" name="bookid"  readonly="readonly"  value="<?php echo $row['bookid'] ?>" /></td></tr><br>
	<tr><td>
	NUMBER OF BOOK ISSUE :</td><td><input type="text"  readonly="readonly"  name="noissue" value="<?php echo $row['noissue'] ?>"/></td><br>
	<tr><td>
	ISSUE DATE :</td>
	<td><input type="text"   readonly="readonly" name="issuedate" value="<?php echo $row['issuedate'] ?>"/></td></tr><br>
	

	
</form>
<?php
 }
 }
}
?>