<?php
error_reporting(0);
$prn_no=filter_input(INPUT_POST,prn_no);
$bookid=filter_input(INPUT_POST, bookid);
$noissue=filter_input(INPUT_POST,noissue);
$issuedate=filter_input(INPUT_POST, issuedate);

	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "college";
	 $conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);
	 if(mysqli_connect_error())
	 {
	 	die('Connect Error (' . mysqli_connect_error() .')' . mysqli_connect_error());
	 }
	 else
	 {
	 	$sql = "INSERT INTO library(prn_no,bookid,noissue,issuedate) values('$prn_no','$bookid','$noissue','$issuedate')";
	 if ($conn->query($sql)) {
	echo "New record insered";
	 }
	 else
	 {
	 	echo "Error:".$sql ."<br>".$conn->error;
	 }
	 $conn->close();
	 }
	
?>