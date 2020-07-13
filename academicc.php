<?php
error_reporting(0);
$prn_no=filter_input(INPUT_POST,prn_no);
$attendence=filter_input(INPUT_POST, attendence);
$result=filter_input(INPUT_POST,result);

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
	 	$sql = "INSERT INTO academic(prn_no,attendence,result) values('$prn_no','$attendence','$result')";
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