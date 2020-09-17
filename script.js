window.onload = function() {
    document.querySelector(".menuMobile").addEventListener("click", function(){
        if(document.querySelector(".menu nav ul").style.display == 'flex') {
            document.querySelector(".menu nav ul").style.display = 'none';
        } else {
            document.querySelector(".menu nav ul").style.display = 'flex';
        }
    });
    
};
$(document).ready(function() {
    var owl = $("#owl-demo");
    owl.owlCarousel({
        autoplay: true,
        autoplayTimeout: 3000,
        loop: true,
        nav: true,
        items : 9,
        responsiveClass:true,
        responsive:{
            0:{
                items:4,
                nav:true
            },
            600:{
                items:6,
                nav:true
            },
            1000: {
                items:9,
                nav:true
                
            }
        }
        
    });
    
  });

