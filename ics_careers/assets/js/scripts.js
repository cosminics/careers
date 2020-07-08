jQuery(document).ready(function($){

	//* Navbar Fixed
    navbarFixed();

	$('.careers_slider').slick({
	  dots: false,
	  infinite: true,
	  speed: 300,
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1,
	        infinite: true,
	        dots: false
	      }
	    },
	    {
	      breakpoint: 600,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    }
	    // You can unslick at a given breakpoint now by adding:
	    // settings: "unslick"
	    // instead of a settings object
	  ]
	});	
});

function navbarFixed(){
    if ( jQuery('.sticky_nav').length ){ 
        jQuery(window).scroll(function() {
            var scroll = jQuery(window).scrollTop();   
            if (scroll){
                jQuery(".sticky_nav").addClass("navbar_fixed");
            } else {
                jQuery(".sticky_nav").removeClass("navbar_fixed");
            }
        });
    };
};