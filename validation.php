 <?php

 $conn = mysqli_connect("localhost", "root", "","multilevel" );

 if($conn)
 {
 	echo "Connection Successful...";
 }
 else
 {
 	echo "Connection is not Successful...";
 }


 ?>

 <?php
 session_start();
 require_once "validation.php";

 	$message = "";

if(isset($_POST["submit"]))
{
	$uname = $_POST["uname"];
	$psw = $_POST["psw"];

	$query = "SELECT * FROM login WHERE uname='$uname'  AND psw='$psw'";
	$result = mysqli_query($conn, $query);

	if(mysqli_num_rows($result)>0)
	{
		while($row = mysqli_fetch_assoc($result))
		{
			if($row["usertype"]== "admin")
			{
				$_SESSION['loginuser'] = $row["uname"];
				header('Location: admin.php');
			}
			else
			{
				$_SESSION['loginuser'] = $row["uname"];
				header('Location: user.php');
			}
		}
	}
	else
	{
		header('Location: login.php');
	}
}


 ?>
