<?php
error_reporting(0);
$prn_no=filter_input(INPUT_POST,prn_no);
$name=filter_input(INPUT_POST, name);
$department=filter_input(INPUT_POST,department);
$class=filter_input(INPUT_POST, clss);
$admission_year=filter_input(INPUT_POST, admission_year);
$username=filter_input(INPUT_POST,username);
$password=filter_input(INPUT_POST,password);

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
	 	$sql = "INSERT INTO stu_info(prn_no,name,department,class,admission_year,username,password) values('$prn_no','$name','$department','$class','$admission_year','$username','$password')";
	 
	 //	$sql="INSERT INTO account(password) values('$password')";
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