<!DOCTYPE html>
<html>
<head>
<title>Mc Donalds</title>
<style>


header{background-color:red;opacity:0.7;color:white;font-size:50px;font-family:cursive;margin:0%;height="200px";}
 footer{ text-align:center;color:black;font-style:italic;}
div.transbox {
  margin: 10px;
  background-color:#FFE4E1;
  border: 1px solid black;
   
}

div.transbox p {
  margin:2%;
  color:black;
  font-size:15px;
  }
footer{ text-align:center;color:black;font-style:italic;}
div.trans2 {
  margin: 10px;
  background-color:	#FFF0F5;
  border: 1px solid black;
  opacity: 0.9;
  font-size:40px;
  filter: alpha(opacity=60); 
  font-family: 'Kaushan Script', cursive;
}
#navcontainer ul
{
margin: 0;
padding: 2%;
list-style-type: none;
font-size:25px;
font-style:normal;
font-family: Arial, Helvetica, sans-serif;
text-align:center;
}


#navcontainer ul li { display: inline; }
footer{
    padding-top: 5px;
    margin-bottom: -20px;
    background: #fff;
    padding-bottom: 1px;
	
}
div.social ul li{
margin:5%;
font-size:17px;
display:inline;
}
ul.list{font-size:20px;font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;}
ul.x{background-color:white;}


* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
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
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

table {
    width: 100%;
    table-layout: fixed;
	margin: 0px; 
   
}
body{
   background-color:	#FFFAF0;
  }
  </style>
  </head>
 <body>
<header><h1 style="font-family:'Kaushan Script',cursive;color:white" height="600px";>Mc Donald's</h1></header><pre><a href="cart.php" target="_blank"><img src="viewcartbut.jpg" alt="Error displaying" align="right" height="100px" width="200px" /></a></pre>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="mcd3.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="mcd1.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="mcd2.jpg" style="width:100%">
  <div class="text"></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<p style="font-size:30px;"><b>BURGERS & BEVERAGES</b></p>
<table cellspacing="30" cellpadding="40">


<?php
	$url = "http://127.0.0.1/wt2_project/WT2_Organised/get&set_items/Mcd.json";
	$ret = file_get_contents($url, FALSE);//false indicates no include path
	echo $ret;
?>
</table>
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
</body>
<footer>
<div class="box">
<div class="social">
</br></br></br>
<ul>
<li><a href="" style="text-decoration:none;color:black;background-color:white">About Us</a></li>
<li><a href="" style="text-decoration:none;color:black;background-color:white">Terms and Conditions</a></li>
<li><a href="" style="text-decoration:none;color:black;background-color:white">Refunds and Cancellation Policy</a></li>
<li><a href="" style="text-decoration:none;color:black;background-color:white">Careers</a></li>
</ul>
</div>
</div>
<div class="fancy">
<!--Connect with us,links-->
© 2017, Name
</div>
</footer>
</html>