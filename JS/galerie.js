var slideIndex = 1;

//Controlare butoane înainte/înapoi
    function plusSlides(n) {
        showSlides(slideIndex += n);
     }

//Comenzi imagini
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("poza");
        var dots = document.getElementsByClassName("punct");
        if (n > slides.length) {slideIndex = 1;}
        if (n < 1) {slideIndex = slides.length;}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" activ", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " activ";
      }
      
      const mySetInterval=setInterval(miscare,3000);
    function miscare(){
        var img=document.getElementsByClassName("contactItem")[Math.floor((Math.random()*10)%2)].children[0];
        img.style.transform = "scale(1.2)";
        img.style.transform = "rotate(360deg)";
        setTimeout(function(){
            img.style.transform = "scale(1)";
            img.style.transform = "rotate(0deg)";
        },1000);
    }