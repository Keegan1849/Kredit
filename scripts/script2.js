var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 6000); // Change image every 2 seconds
}

var i = 0;
var txt = 'login here using your username and password';
var speed = 50;

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("log").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}