<DOCTYPE html>
<html>
<head>
<body>
<link rel="stylesheet" type="text/css" href="main.css">
<div class="menu">
<a href="#" class="brand"><img src="logo2.png"></a>
 <body>
<nav>
<ul>
<li><a href="railway.php">BOOK YOUR TICKET</a></li>
 <li><a href="#">Help</a></li>
</ul>
</nav>
</div>
<div class="container">
 <div class="mySlides">
 <div class="numbertext">1 / 6</div>
 <img src="mainpage.jpg" style="width:100%">
 </div>
 <div class="mySlides">
 <div class="numbertext">2 / 6</div>
 <img src="mainpage2.jpg" style="width:100%">
 </div>
 <div class="mySlides">
 <div class="numbertext">3 / 6</div>
 <img src="mainpage3.jpg" style="width:100%">
 </div>
 <div class="mySlides">
 <div class="numbertext">4 / 6</div>
 <img src="mainpage4.jpg" style="width:100%">
 </div>
 <div class="mySlides">
 <div class="numbertext">5 / 6</div>
 <img src="mainpage5.jpg" style="width:100%">
 </div>
 <!-- Next and previous buttons -->
 <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
 <a class="next" onclick="plusSlides(1)">&#10095;</a>
<script>
var slideIndex = 1;
showSlides(slideIndex);
function plusSlides(n) {
 showSlides(slideIndex += n);
}
function currentSlide(n) {
 showSlides(slideIndex = n);
}
function showSlides(n) {
 var i;
 var slides = document.getElementsByClassName("mySlides");
 var dots = document.getElementsByClassName("demo");
 var captionText = document.getElementById("caption");
 if (n > slides.length) {slideIndex = 1}
 if (n < 1) {slideIndex = slides.length}
 for (i = 0; i < slides.length; i++) {
 slides[i].style.display = "none";
 }
 for (i = 0; i < dots.length; i++) {
 dots[i].className = dots[i].className.replace(" active", "");
 }
 slides[slideIndex-1].style.display = "block";
 dots[slideIndex-1].className += " active";
 captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
</body>
<section></section>
</head>
</html>