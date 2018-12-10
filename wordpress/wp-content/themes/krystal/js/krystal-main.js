
  (function ($) {

    $(window).load(function () {
        $("#pre-loader").delay(500).fadeOut();
        $(".loader-wrapper").delay(1000).fadeOut("slow");
    });

    $('.navbar-toggle').on('click', function () {
        if(!$('header').hasClass('fixed')) {           
          /* navbar toggle click */ 
        }              
    });  

    /* menu hover */
    var limit = 767;
    var window_width = window.innerWidth;
    if(window_width>limit){
        $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).fadeIn("slow");
            $(this).toggleClass('open');
            $('b', this).toggleClass("caret caret-up");                
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).fadeOut("slow");
            $(this).toggleClass('open');
            $('b', this).toggleClass("caret caret-up");                
        });
    }   

    $(document).ready(function () { 
        
        $('.contact-section form input[type="submit"]').wrap('<div class="contact-button"></div>'); 

        $('ul.nav a').each(function() {
            $(this).attr('data-scroll', '');
        });       

        /*-- resize parallax size --*/
        $('ul#filter li a').click(function(e) {              
           $(window).trigger('resize.px.parallax');
        });       

        /*-- Magnific Popup --*/
        $('.image-popup-link').magnificPopup({
            type: 'image',
            closeOnBgClick: true,
            fixedContentPos: false,              
        }); 

        $('.video-popup-link').magnificPopup({
            type: 'iframe',
            closeOnBgClick: true,
            fixedContentPos: false,              
        });

        /*-- Button Up --*/
        var btnUp = $('<div/>', { 'class': 'btntoTop' });
        btnUp.appendTo('body');
        $(document).on('click', '.btntoTop', function (e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, 700);
        });

        $(window).on('scroll', function () {
            if ($(this).scrollTop() > 200)
                $('.btntoTop').addClass('active');
            else
                $('.btntoTop').removeClass('active');
        });

        if( $('a').hasClass('custom-logo-link') && $('a.custom-logo-link img').attr('src') != ''){
            $('h1.site-title').css({'display': 'none'});
        }
        else{
            $('h1.site-title').css({'display': 'block'});   
        }

        /*-- Menu toggle -- */
        var menubutton = $('.navbar-toggle i.fa');
        var menudiag = $('.res-menu .navbar-collapse');
        menubutton.on('click', function(){
            if (menubutton.hasClass('fa-bars') && !menudiag.hasClass('in')) {
                menubutton.removeClass('fa-bars').addClass('fa-close');
            }
            else{
                menubutton.removeClass('fa-close').addClass('fa-bars');
            }
        });

    });    

})(this.jQuery);