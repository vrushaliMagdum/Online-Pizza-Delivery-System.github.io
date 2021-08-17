<!DOCTYPE html>
<html>
<head>
	<title>Secured</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
session_start();
if(!isset($_SESSION["username"]))
{
	header('Location:./index 1 (1).php');
}
?>
<br>

<br>
<div class="wrapper">
			

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style>
.navigation{
  padding-top:30px;
  padding-bottom:30px;
  position:absolute;
  top:0;
  width:100%;
  z-index:1;
}

.navbar-right{
  float:right;
  padding-right:10%;
}

.navbar-right a{
  text-decoration:none;
  padding:20px;
  color: #C8F937;
  font-family:serif;
  font-size: 30px;
  font-weight:900;
}

.navbar-right a:hover{
  text-decoration:underline;
}
.navbar-logo{
  padding-left:10%;
  font-family:cursive;
  font-size:40px;
  font-weight:bold;
  text-decoration:none;
  color:#C8F937; 
}

.video-container {
z-index: -100;
width:100%;
overflow:hidden;
top:0;
left:0;
}

#video-bg{
  width:100%;
 
}

#welcome
{
  text-align: center;
  color: pink;
  padding-left: 25%;
  padding-top: 15%;
  font-size: 50px;
  font-family: serif;
  font-weight: 900;
}

#h2
{
  text-align: center;
  padding-left: 15%;
  padding-top: 3%;
  font-family: cursive;
  color: yellow;
  font-weight: 900;
}
#h3
{
  text-align: center;
  font-family: serif;
  color: beige;
  padding-top: 2%;
  padding-left: 25%;
  padding-right: 10%;
}

.bg-img {
  /* The image used */

  min-height: 750px;
  padding-top: 5px;
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  
  /* Needed to position the navbar */
  position: relative;
  object-fit: cover;
   object-position: center center;
}




.button {
  border-radius: 85%;
  color: solid white;
  padding: 30px 30px;
  text-align: center;
  text-decoration: none;
  font-size: 25px;
  margin-left: 150px;
  margin-top: 45px;
  transition-duration: 0.4s;
  cursor: pointer;
  font-weight: 900;
  background-color: #FE2F45; 
  border: 5px solid #4CAF50;
}


.button:hover {
  background-color: #4CAF50;
  color: white;
}
.footer2
{
  color: #C8F937;
  font-size: 30px;
  padding-left: 400px;
  margin-top: 200px;
}



* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 600px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: black;
  font-family: cursive;
  font-size: 30px;
  padding: 12px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
  background-color: white;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  
  animation-name: fade;
  animation-duration: 1.5s;
}


@keyframes fade {
  from {opacity: .1}
  to {opacity: 1}
}


</style>
  
</head>
<body style="background-color: grey; margin: 0; padding-top: 0;">

  <div class="header" >
    <nav class="navigation" style="background-color: rgba(0,0,0,0.7);">
      <a href="#" class="navbar-logo">Friend's Pizza</a>
      <div class="navbar-right">
        <a href="about us.html">About Us</a>
        
        <button class="btn1" style="background-color: black;"><a href="Html.html">Menu</a></button>
        
        <a href="contact.html">Contact Us</a>
        <button class="btn2" style="background-color: black;"><a href="./logout 1 (1).php">Logout</a></button>
      </div>
    </nav>

    <div class="video-container">
      <video autoplay loop muted id="video-bg">

        <source src="image\v2.mp4">

      </video>
    </div>
  </div>




  <div class="bg-img" style="  background-image: url('image/menu-bg-img11.jpg'); ">
  
<h1 id="welcome">WELCOME TO FRIENDS PIZZA !</h1>
<h1 id="h2">Family Cafe & Pizzeria</h1>
<h2 id="h3">Beauty comes in all shapes and sizes. Small, large, circle, square, thin crust, thick crust, stuffed crust, extra toppings. Who says that money cannot buy happiness has clearly never spent their money on pizza.</h2>

</div>




<div class="bg-img" style="background-image: url('image/d2.jpg'); padding-left:25%; padding-top: 9%;"> 


<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 6</div>
    <img src="qua.jpg" style="width:100%">
    <div class="text">Special pizza</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 6</div>
    <img src="jain.jpeg" style="width:100%">
    <div class="text">Jain Special</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="1.jpg" style="width:100%">
    <div class="text">Margherita</div>
  </div>
 <div class="mySlides fade">
    <div class="numbertext">4 / 6</div>
    <img src="italian.jpg" style="width:100%">
    <div class="text">Italian</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">5 / 6</div>
    <img src="mexicandelight.jpg" style="width:100%">
    <div class="text">Mexican delight</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">6 / 6</div>
    <img src="tandori.jpg" style="width:100%">
    <div class="text">Tandori Pizza</div>
  </div>
  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
  <span class="dot" onclick="currentSlide(6)"></span>
</div>
</div>

 

  <div id='contact us'>
<div style="width: 60%; float: left; background-color: #C8F937; height: 50%; font-family: cursive;">
<h1 style="background-color: #C8F937; text-align: center; padding-top: 80px;"> Call +1 2345 6789</h1><h1 style="text-align: center;">Or fill out the booking form</h1>

 <button class="button" onclick="window.location.href='Html.html';" style="margin-left: 280px; padding: 20px 20px; margin-bottom: 40px;">Book Your Order</button>

</div>

    
<div  style="  background-image: url('image/map.png'); width: 40%; float: left; min-height:400px; ">

      
</div>
</div>
<br>

<div  class="bg-img" style="  background-image: url('image/footer.jpg'); min-height: 300px; margin-top: 380px;">

   <div style=" width: 40%;"> 
    <a style=" color: #C8F937; font-size: 80px;">Friend's Pizza</a>  
    </div>
    <div style=" padding-left: 500px; padding-bottom: 20px;"> 
      
        <a href="secured 1 (1).php" class="footer2">Home</a><br><br>
        <a href="about us.html" class="footer2">About Us</a><br><br>
        <a href="Html.html" class="footer2">Menu</a><br><br>
        <a href="contact.html" class="footer2">Contact us</a><br><br>
    </div>
</div>
  



  
</body>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>



