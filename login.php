<?php
  include "validation.php";
?>


<!DOCTYPE html>
<html>
<head>
	<title>Fine Art Auction System</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="style.css">

	<style>
	body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

	</style>
</head>
<body class="w3-light-grey w3-content" style="max-width:1000px; height:1500px">

	<!-- Navbar -->

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Fine Art Auction</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><button1 onclick="document.getElementById('id02').style.display='block'" style="width:auto;"><span class="glyphicon glyphicon-user"></span> Sign Up</a></button1></li></ul>

      <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><button2 onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><span class="glyphicon glyphicon-log-in"></span>Login</a></button2></li>
    </ul>
  </div>
</nav>




<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin:center">
  <!-- Header -->
  <header id="portfolio">
    <a href="#"><img src="img/logo.jpg" style="width:60px; position:center;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container"><br>
    <h2><b>Art for Auction</b></h2>
  </div>
</header>

<!-- LOGO -->
 
  <div class="w3-row-padding">
    <div class="w3-third w3-container">
      <img src="img/logo.jpg" alt="art1" style="border: 15px solid #FFFFFF; border-radius: 1px; width:50%" class="w3-hover-opacity">
      <div class="w3-container w3-white"></div></div>


<div class="w3-2nd-col m12"> 
    <h4><b>About</b></h4>
    <p>I am Juaria Iqbal, an aspiring Artist. Please Visit my gallery where I showcase my Artworks.</p>
    <h5><b>Visit My Gallery</b></h5>
    <p><b>Address: Building no.123, road no.123, Dhaka, Bangladesh.</b></p>
    <hr></div>
      </div>

  <!-- Images of Me -->
  <div class="w3-row-padding w3-padding-16" id="about">
    <div class="w3-col m6">
      <img src="img/slide2.jpg" alt="Me" style="width:100%">
    </div>
    <div class="w3-col m6">
      <img src="img/slide3.jpg" alt="Me" style="width:100%">
    </div>
  </div>



<!-- Sign-up form-->
<div id="id02" class="modal">
  
  <form class="modal-content animate" action="registration.php" method="POST">

    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img/logo.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
    	<div class="row1">
    		<div class = "col-md-6">
      <p><b>First name</b></p>
      <label class="fname" for="fname"></label>
      <input class="unamebtn" type="text" placeholder="Enter first name" name="fname" required><br>

      <p><b>Last name</b></p>
      <label class="lname" for="lname"></label>
      <input class="unamebtn" type="text" placeholder="Enter last name" name="lname" required><br>

      <p><b>User name</b></p>
      <label class="uname" for="uname"></label>
      <input class="unamebtn" type="text" placeholder="Enter Username" name="uname" required><br></div></div>


      <div class="row2">
    		<div class = "col-md-6">
      <p><b>E-mail ID</b></p>
      <label class="email" for="email"></label>
      <input class="unamebtn" type="text" placeholder="Enter e-mail"name="email" required><br>

      <p><b>Password</b></p>
      <label for="psw"></label>
      <input class="unamebtn" type="password" placeholder="Enter Password" name="psw" required><br>

       <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label><br>  
      <button class="loginbtn" type="submit" name="submit" value="Signup">Sign up</button><br>
    </div></div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


<!-- LOG-in form-->
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="validation.php" method="POST">

    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img/logo.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">

    	<div class="row1">
    		<div class = "col-md-6">
      <tr>
         <p><b>User Type</b></p>
        <td><select name="type" class="unamebtn">
          <option value="-1">select user type</option>
          <option value="admin">Admin</option>
          <option value="User">User</option>
        </select></td>
      </tr><br>
       <p><b>User name</b></p>
      <label class="uname" for="uname"></label>
      <input class="unamebtn" type="text" placeholder="Enter Username" name="uname" required><br>

       <p><b>Password</b></p>
      <label for="psw"></label>
      <input class="unamebtn" type="password" placeholder="Enter Password" name="psw" required><br>
  </div></div>

      <div class="row1">
    		<div class = "col-md-6">
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label><br>  
      <button class="loginbtn" type="submit" name="submit" value="Login">Login</button></br>

      <p class="text-center" style="color:red">
        <?php echo $message;?>

    <div style="background-color:white">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn"><b>Cancel</b></button>
      <span class="psw"><b>Forgot</b><a href="#"><b> password?</b></a></span>
    </div>
  </form></div></div>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>

