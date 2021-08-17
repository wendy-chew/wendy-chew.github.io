
$('document').ready(function(){
    //loader
    setTimeout(()=>{
        $(".loader-container").fadeToggle();},400);
    
    //ScrollReveal        
    window.sr = ScrollReveal();         
    sr.reveal('.right img',{             
        duration:1000,             
        origin:'bottom',             
        delay:500,             
        distance:'100px'         
    }); 
    sr.reveal('h1',{             
        duration:1000,             
        origin:'left',             
        delay:500,             
        distance:'100px'         
    }); 
    sr.reveal('.contact-body',{             
        duration:1000,             
        origin:'top',             
        delay:500,   
        distance:'100px'         
    }); 
    sr.reveal('.contact-info',{             
        duration:1000,             
        origin:'bottom',             
        delay:500,   
        distance:'100px'  

    }); 

    //smooth scroll
    $('.scroll').click(function(e){
        e.preventDefault();

        $('html,body').animate({
            scrollTop:$(this.hash).offset().top
        },1000);
    });

    //typed.js
    var typed = new Typed('.typed', {
        strings: ['a Computer Science Student.',
        'interested in Web Design.',
    'interested in Programming.'],
        smartBackspace: true ,
        typeSpeed: 60,
		startDelay: 1200,
		backSpeed: 60,
		backDelay: 1000,
		loop: true,
        loopCount: 10,
        showCursor: false,
		cursorChar: "|",
		attr: null,
		contentType: 'html',
    });

    // owl-carousel
    $('.owl-carousel').owlCarousel({
        margin:20,
        loop:true,
        autoplay:true,
        responsive:{
            0: {items: 1},
            600:{items: 2},
            1000:{items: 3}
        }
    });

     // lightbox
    baguetteBox.run('.experience-carousel',{
        animation:'fadeIn'
    });
    



});
