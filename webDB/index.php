<?php
    include "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
<title>Main Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
  height: 100%;
  color: black;
  line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
  background-image: url('/webDB/pictures/m3.jpg');
}

/* Second image (Portfolio) */
.bgimg-2 {
    background-image: linear-gradient(to bottom right, #037266, #40978e, #85bcb6);
}

a.buy {
  background: linear-gradient(45deg,#037266, #40978e, #85bcb6);
  border: 2px solid white;
  padding: 25px 50px;
  margin: 20px;
  border-radius: 5px;
  text-decoration: none;
  transition-duration: 0.5s;
}

a.buy:hover{
  background: linear-gradient(90deg,#037266, #40978e, #85bcb6);
  border-radius: 5px;
}

a.sell {
  background: linear-gradient(90deg,#037266, #40978e, #85bcb6);
  border: 2px solid white;
  padding: 25px 50px;
  margin: 20px;
  border-radius: 5px;
  text-decoration: none;
  transition-duration: 0.5s;
}

a.sell:hover{
  background: linear-gradient(45deg,#037266, #40978e, #85bcb6);
  border-radius: 5px;
}


.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1600px) {
  .bgimg-1, .bgimg-2{
    background-attachment: scroll;
    min-height: 400px;
  }
}
</style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="/webDB/index.php" class="w3-bar-item w3-button" style="font-family: 'Sarabun', sans-serif; font-size: larger;"><i>AUTO CAR</i></a>
    <a href="/webDB/apply.php" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> Apply job</a>
    <a href="/webDB/contact.html" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> Contact</a>
    
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="/webDB/apply.php" class="w3-bar-item w3-button" onclick="toggleFunction()"> Apply job</a>
    <a href="/webDB/contact.html" class="w3-bar-item w3-button" onclick="toggleFunction()"> Contact</a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <!-- <img class ="bgimg-1" src="/webDB/pictures/m3.jpg"> -->
    <center>
      <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">Welcome to AUTO CAR</span>
      <h1> </h1><br>
      <h1> </h1><br>
      <a href="/webDB/buy.php" class="buy" style="color: white;">BUY</a>
      <a href="/webDB/sell.php" class="sell" style="color: white;">SELL</a>
      </center>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 ">
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
  </div>
  <p>AUTO CAR 2024</p>
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>
