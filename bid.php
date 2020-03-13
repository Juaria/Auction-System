<?php


$uname = $_POST['uname'];
$email = $_POST['email'];
$amount = $_POST['amount'];



// Database connection
$conn = new mysqli('localhost' , 'root' , '', 'bid');
if($conn ->connect_error){
	die('Connection Failed : '.$conn->connect_error);
}else{
	$db = $conn->prepare("insert into bidamount(uname, email, amount) 
		values(?, ?, ?)");
	$db->bind_param("ssi", $uname, $email, $amount);
	$db->execute();
	echo "Bid Successful...";
	
	$db->close();
	$conn->close();

}
?>
