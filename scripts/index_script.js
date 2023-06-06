let slideIndex = 0;
let timeout;

window.onload = function() {
  showSlides();
  
  let dots = document.getElementsByClassName("dot");
  for (let i = 0; i < dots.length; i++) {
    dots[i].addEventListener("click", function() {
      slideIndex = i;
      clearTimeout(timeout); 
      showSlides();
    });
  }
}

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  
  slides[slideIndex].style.display = "block";  
  dots[slideIndex].className += " active";
  
  slideIndex++;
  if (slideIndex >= slides.length) {
    slideIndex = 0;
  }
  
  timeout = setTimeout(showSlides, 3000);
}

