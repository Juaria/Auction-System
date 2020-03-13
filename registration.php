<?php

/*
session_start();
header('location:login.php');
echo "Registration Successful...";
*/

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$uname = $_POST['uname'];
$email = $_POST['email'];
$psw = $_POST['psw'];



// Database connection
$conn = new mysqli('localhost' , 'root' , '', 'signup');
if($conn ->connect_error){
	die('Connection Failed : '.$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into registration(fname, lname, uname, email, psw) 
		values(?, ?, ?, ?, ?)");
	$stmt->bind_param("sssss", $fname, $lname, $uname, $email, $psw);
	$stmt->execute();
	echo "Registration Successful...";
	
	$stmt->close();
	$conn->close();

}
?>

