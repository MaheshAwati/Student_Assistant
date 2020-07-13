<?php
error_reporting(0);
$prn_no=filter_input(INPUT_POST,prn_no);
$totalf=filter_input(INPUT_POST,totalf);
$acfine=filter_input(INPUT_POST,acfine);
$remaining_fee=filter_var(remaining_fee);
$paidamt=filter_input(INPUT_POST,paidamt);
$lbfine=filter_input(INPUT_POST,lbfine);
//$password=filter_input(INPUT_POST,password);
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
	 	$remaining_fee=$totalf-$paidamt;
	 $sql = "INSERT INTO account(prn_no,acfine,paidamt,lbfine,totalf,remaining_fee) values('$prn_no','$acfine','$paidamt','$lbfine','$totalf','$remaining_fee')";
	 	
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