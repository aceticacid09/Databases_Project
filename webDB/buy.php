
<!DOCTYPE html>
<html>
<head>
<title>Buy new car</title>
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
  min-height: 100%;
}

/* Second image (Portfolio) */
.bgimg-2 {
    background-image: linear-gradient(to bottom right, #037266, #40978e, #85bcb6);
}

button.learnmore {
  background: linear-gradient(45deg,#037266, #40978e, #85bcb6);
  border: 2px solid white;
  border-radius: 5px;
  transition-duration: 0.5s;
}

button.learnmore:hover{
  background: linear-gradient(135deg,#037266, #40978e, #85bcb6);
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
    <a href="/webDB/buy.php" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> Buy new car</a>
    <a href="/webDB/sell.php" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> Sell your car</a>
    <a href="/webDB/apply.php" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> Apply job</a>
    <a href="/webDB/contact.html" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> Contact</a>
    
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="/webDB/buy.php" class="w3-bar-item w3-button" onclick="toggleFunction()">Buy new car</a>
    <a href="/webDB/sell.php" class="w3-bar-item w3-button" onclick="toggleFunction()">Sell your car</a>
    <a href="/webDB/apply.php" class="w3-bar-item w3-button" onclick="toggleFunction()">Apply job</a>
    <a href="/webDB/contact.html" class="w3-bar-item w3-button" onclick="toggleFunction()">Contact</a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
  </div>
</div>


<div class="bgimg-2 w3-display-container w3-opacity-min">
    <div class="w3-display-middle">
      <span class="w3-xxlarge w3-text-black w3-wide">Why AUTO CAR?</span>
    </div>
  </div>

<div class="w3-row w3-center w3-dark-grey w3-padding-16">
  <div class="w3-quarter w3-section">
    <img src="/webDB/pictures/sedan.png" style="width: 20%;"><br>
    <span class="w3-xlarge">20+</span><br>
    Car brands
  </div>
  <div class="w3-quarter w3-section">
    <img src="/webDB/pictures/parking.png" style="width: 20%;"><br>
    <span class="w3-xlarge">100+</span><br>
    Cars in stock
  </div>
  <div class="w3-quarter w3-section">
    <img src="/webDB/pictures/customer-support.png" style="width: 20%;"><br>
    <span class="w3-xlarge">24Hr</span><br>
    Support
  </div>
  <div class="w3-quarter w3-section">
    <img src="/webDB/pictures/review.png" style="width: 20%;"><br>
    <span class="w3-xlarge">1500+</span><br>
    Positive reviews
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64" id="portfolio">
  <h3 class="w3-center">Buy new car?</h3>
  <p class="w3-center"><em>Here are some of cars that we have<br></p><br>

  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div class="w3-row-padding w3-center">
    <div class="w3-col m3">
      <a href="/webDB/buycar1.php">
      <img src="/webDB/pictures/m3.jpg" style="width:100%;" onclick="onClick(this)" class="w3-hover-opacity">
      </a>
      <p>BMW M3</p>
    </div>

    <div class="w3-col m3">
      <a href="/webDB/buycar2.php">
      <img src="/webDB/pictures/audir8.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
      </a>
      <p>Audi R8</p>
    </div>

    <div class="w3-col m3">
      <a href="/webDB/buycar3.php">
      <img src="/webDB/pictures/fordranger.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
      </a>
      <p>Ford Ranger</p>
    </div>

    <div class="w3-col m3">
      <a href="/webDB/buycar4.php">
      <img src="/webDB/pictures/fortuner.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
      </a>
      <p>Toyota Fortuner</p>
    </div>
  </div>

  <div class="w3-row-padding w3-center w3-section">
    <div class="w3-col m3">
      <a href="/webDB/buycar5.php">
      <img src="/webDB/pictures/Hilux.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"></a>
      <p>Toyota Hilux</p>
    </div>

    <div class="w3-col m3">
      <a href="/webDB/buycar6.php">
      <img src="/webDB/pictures/hondajazz.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"></a>
      <p>Honda Jazz</p>
    </div>

    <div class="w3-col m3">
      <a href="/webDB/buycar7.php">
      <img src="/webDB/pictures/mazdarx8.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"></a>
      <p>Mazdar X8</p>
    </div>

    <div class="w3-col m3">
      <a href="/webDB/buycar8.php">
      <img src="/webDB/pictures/nissangtr.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"></a>
      <p>Nissan GTR</p>
    </div>
  </div>
</div>



<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 ">
  <a href="/webDB/index.php" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
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
