jQuery('document').ready(function(){
    jQuery('#slider .owl-carousel').owlCarousel({
        loop:true,
        nav:false,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:2
            }
        }
    })
});