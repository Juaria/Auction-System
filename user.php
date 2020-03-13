<?php

session_start();

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
* {box-sizing: border-box;}

</style>
</head>
	<body class="w3-light-grey w3-content" style="max-width:1600px; height:1500px" >

	<!-- Navbar -->

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Fine Art Auction</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">FAQ</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Categories<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1</a></li>
          <li><a href="#">Page 2</a></li>
          <li><a href="#">Page 3</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><button2 onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><span class="glyphicon glyphicon-log-out"></span><a href="logout.php">Logout</a></button2></li>
    </ul>
  </div>
</nav>

<div class="container">
  <h5>Right Aligned Navbar</h5>
</div>




<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:240px; height:100%;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="img/jonsnow.png" style="width:70%;" class="w3-round"><br><br>
    <h4><b>User name: User 1</b></h4>
    <p class="w3-text-grey">user1@gmail.com</p>
    <p class="w3-text-grey">House no.112, road no.3, dhaka, Bangladesh</p>
  </div>


  <div class="w3-bar-block">
     <a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>View Art Gallery</a> 
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ABOUT</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a> 
  </div>
 
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="portfolio">
    <a href="#"><img src="img/logo.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h2><b>Art for Auction</b></h2>
    <div class="w3-section w3-bottombar w3-padding-16">
      <span class="w3-margin-right">Filter:</span> 
      <button class="w3-button w3-black">ALL</button>
      <button class="w3-button w3-white"><i class="fa fa-diamond w3-margin-right"></i>Design</button>
      <button class="w3-button w3-white w3-hide-small"><i class="fa fa-photo w3-margin-right"></i>Photos</button>
      <button class="w3-button w3-white w3-hide-small"><i class="fa fa-map-pin w3-margin-right"></i>Art</button>
    </div>
    </div>
  </header>
  
  <!-- First Photo Grid-->
  <!-- First image-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="img/art1.jpg" alt="art1" style="border: 15px solid #FFFFFF; border-radius: 1px; width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Abstract Portrait</b></p>
        <p>Dimension: 20"x24" inches</p>
        <p>Description: Acrylic painting on canvas.</p>
        <p style="color: #146EB3"><b>Initial Price:</b> 8000bdt</p>
        <p style="color: #A91564"><b>Bid Price:</b> 9000bdt</p> 
        <button class="open-button" onclick="openForm()">Bid!</button> 
        <h4 style="color: #D81F1F; text-align: center"><b>Bid ends in:</b></h4>
        <!--timer-->
        <h4 id="demo" style="color: #F21356; text-align: center; font-weight: bold"></h4>
        <script>
          var countDownDate = new Date("Apr 15, 2020 15:30:30").getTime();
      // Update the count down every 1 second
      var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();
          
        // Find the distance between now and the count down date
        var distance = countDownDate - now;
          
        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
          
        // Output the result in an element with id="demo"
        document.getElementById("demo").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";
          
        // If the count down is over, write some text 
        if (distance < 0) {
          clearInterval(x);
          document.getElementById("demo").innerHTML = "EXPIRED";
        }
      }, 1000);

        </script>


      </div>
    </div>

    <!-- second image-->
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="img/art2.jpg" alt="art2" style="border: 15px solid #FFFFFF; border-radius: 1px; width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Sketch Art</b></p>
        <p>Dimension: 20"x24" inches</p>
        <p>Description: Acrylic painting on canvas.</p>
        <p style="color: #146EB3"><b>Initial Price:</b> 8000bdt</p>
        <p style="color: #A91564"><b>Bid Price:</b> 12000bdt</p>
        <button class="open-button" onclick="openForm()">Bid!</button> 
        <h4 style="color: #D81F1F; text-align: center"><b>Bid ends in:</b></h4>
        <!--timer-->
        <h4 id="demo2" style="color: #F21356; text-align: center; font-weight: bold"></h4>
        <script>
          var countDownDate = new Date("Apr 15, 2020 15:30:30").getTime();
      // Update the count down every 1 second
      var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();
          
        // Find the distance between now and the count down date
        var distance = countDownDate - now;
          
        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
          
        // Output the result in an element with id="demo"
        document.getElementById("demo2").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";
          
        // If the count down is over, write some text 
        if (distance < 0) {
          clearInterval(x);
          document.getElementById("demo2").innerHTML = "EXPIRED";
        }
      }, 1000);

        </script>

      </div>
    </div>

<!-- third image-->
    <div class="w3-third w3-container">
      <img src="img/art3.jpg" alt="Norway" style="border: 15px solid #FFFFFF; border-radius: 1px; width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Northern Lights</b></p>
        <p>Dimension: 20"x24" inches.</p>
        <p>Description: Acrylic painting on canvas.</p>
        <p style="color: #146EB3"><b>Initial Price:</b> 8000bdt</p>
        <p style="color: #A91564"><b>Bid Price:</b> 15000bdt</p> 
        <button class="open-button" onclick="openForm()">Bid!</button> 
        <h4 style="color: #D81F1F; text-align: center"><b>Bid ends in:</b></h4>
        <!--timer-->
        <h4 id="demo3" style="color: #F21356; text-align: center; font-weight: bold"></h4>
        <script>
          var countDownDate = new Date("Apr 15, 2020 15:30:30").getTime();
      // Update the count down every 1 second
      var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();
          
        // Find the distance between now and the count down date
        var distance = countDownDate - now;
          
        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
          
        // Output the result in an element with id="demo"
        document.getElementById("demo3").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";
          
        // If the count down is over, write some text 
        if (distance < 0) {
          clearInterval(x);
          document.getElementById("demo3").innerHTML = "EXPIRED";
        }
      }, 1000);

        </script>
      </div>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <!-- 4th image-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="img/art4.jpg" alt="Norway" style="border: 15px solid #FFFFFF; border-radius: 1px; width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Purple Sunset</b></p>
        <p>Dimension: 20"x24" inches.</p>
        <p>Description: Acrylic painting on canvas.</p>
        <p style="color: #146EB3"><b>Initial Price:</b> 8000bdt</p>
        <p style="color: #A91564"><b>Bid Price:</b> 10000bdt</p> 
        <button class="open-button" onclick="openForm()">Bid!</button> 
        <h4 style="color: #D81F1F; text-align: center"><b>Bid ends in:</b></h4>
        <!--timer-->
        <h4 id="demo4" style="color: #F21356; text-align: center; font-weight: bold"></h4>
        <script>
          var countDownDate = new Date("Apr 15, 2020 15:30:30").getTime();
      // Update the count down every 1 second
      var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();
          
        // Find the distance between now and the count down date
        var distance = countDownDate - now;
          
        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
          
        // Output the result in an element with id="demo"
        document.getElementById("demo4").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";
          
        // If the count down is over, write some text 
        if (distance < 0) {
          clearInterval(x);
          document.getElementById("demo4").innerHTML = "EXPIRED";
        }
      }, 1000);

        </script>
      </div>
    </div>

    <!-- 5th image-->

    <div class="w3-third w3-container w3-margin-bottom">
      <img src="img/art5.jpg" alt="Norway" style="border: 15px solid #FFFFFF; border-radius: 1px; width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Abstract Sketch</b></p>
        <p>Dimension: 20"x24" inches.</p>
        <p>Description: Acrylic painting on canvas.</p>
        <p style="color: #146EB3"><b>Initial Price:</b> 8000bdt</p>
        <p style="color: #A91564"><b>Bid Price:</b> 13000bdt</p>
        <button class="open-button" onclick="openForm()">Bid!</button>  
         <h4 style="color: #D81F1F; text-align: center"><b>Bid ends in:</b></h4>
        <!--timer-->
        <h4 id="demo5" style="color: #F21356; text-align: center; font-weight: bold"></h4>
        <script>
          var countDownDate = new Date("Apr 15, 2020 15:30:30").getTime();
      // Update the count down every 1 second
      var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();
          
        // Find the distance between now and the count down date
        var distance = countDownDate - now;
          
        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
          
        // Output the result in an element with id="demo"
        document.getElementById("demo5").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";
          
        // If the count down is over, write some text 
        if (distance < 0) {
          clearInterval(x);
          document.getElementById("demo5").innerHTML = "EXPIRED";
        }
      }, 1000);

        </script> 

      </div>
    </div>

    <!-- 6th image-->

    <div class="w3-third w3-container">
      <img src="img/art6.jpg" alt="Norway" style="border: 15px solid #FFFFFF; border-radius: 1px; width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Green Woods</b></p>
        <p>Dimension: 20"x24" inches.</p>
        <p>Description: Acrylic painting on canvas.</p>
        <p style="color: #146EB3"><b>Initial Price:</b> 8000bdt</p>
        <p style="color: #A91564"><b>Bid Price:</b> 9500bdt</p>
		<button class="open-button" onclick="openForm()">Bid!</button>  
         <h4 style="color: #D81F1F; text-align: center"><b>Bid ends in:</b></h4>
        <!--timer-->
        <h4 id="demo6" style="color: #F21356; text-align: center; font-weight: bold"></h4>
        <script>
          var countDownDate = new Date("Apr 15, 2020 15:30:30").getTime();
      // Update the count down every 1 second
      var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();
          
        // Find the distance between now and the count down date
        var distance = countDownDate - now;
          
        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
          
        // Output the result in an element with id="demo"
        document.getElementById("demo6").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";
          
        // If the count down is over, write some text 
        if (distance < 0) {
          clearInterval(x);
          document.getElementById("demo6").innerHTML = "EXPIRED";
        }
      }, 1000);

        </script>
      </div>
    </div>
  </div>


<!-- Pop up Bid -->

<div class="form-popup" id="myForm">
  <form action="bid.php" class="form-container"  method="POST">
    <h1>Bid On!</h1>

    <label for="uname"><b>User name</b></label>
    <input type="text" placeholder="Enter username" id="uname" name="uname" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" id="email" name="email" required>

    <label for="amount"><b>Bid Amount</b></label>
    <input type="text" placeholder="Enter Amount" id="number" name="amount" required>

    <button type="submit" class="btn">Bid</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>





  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
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

  <div class="w3-container w3-padding-large" style="margin-bottom:32px">
    
     <h4><b>Visit My Gallery</b></h4><br>
    <p>I am Juaria Iqbal, an aspiring Artist. Please Visit my gallery where I am showcasing my Artworks.</p>
    <p><b>Address: Building no.123, road no.123, Dhaka, Bangladesh.</b></p>
    
    <hr>
    
 
  <!-- Contact Section -->
  <div class="w3-container w3-padding-large w3-grey">
    <h4 id="contact"><b>Contact Me</b></h4>
    <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
        <p>email@email.com</p>
      </div>
      <div class="w3-third w3-teal">
        <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
        <p>Dhaka, Bangladesh</p>
      </div>
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
        <p>512312311</p>
      </div>
    </div>
    <hr class="w3-opacity">
    <form action="login.php" target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-black w3-margin-bottom"><i class="fa fa-paper-plane w3-margin-right"></i>Send Message</button>
    </form>
  </div>

  <!-- Footer -->
  <footer class="w3-container w3-padding-32 w3-dark-grey">
  <div class="w3-row-padding">
    <div class="w3-third">
      <h3>Confirmation details:</h3>
      <p>Users will be notified in the mail if they win.</p>
    </div>



    <div class="w3-third">
      <h3 style="text-align: center">Fine Art Aution System</h3>
      
    </div>

    <div class="w3-third">
      <h3 style="text-align: center">Follow us on</h3>
      <p>
     <div style="text-align: center" class="w3-panel w3-large">
       <i class="fa fa-facebook-official w3-hover-opacity"></i>
       <i class="fa fa-instagram w3-hover-opacity"></i>
       <i class="fa fa-snapchat w3-hover-opacity"></i>
       <i class="fa fa-pinterest-p w3-hover-opacity"></i>
       <i class="fa fa-twitter w3-hover-opacity"></i>
       <i class="fa fa-linkedin w3-hover-opacity"></i>
     </div>
      </p>
    </div>

  </div>
  </footer>
  
  <div class="w3-black w3-center w3-padding-24">Powered by <a href="https://www.fine_art_auction.com" title="W3.CSS" target="_blank" class="w3-hover-opacity">fine_art_auction.com</a></div>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
