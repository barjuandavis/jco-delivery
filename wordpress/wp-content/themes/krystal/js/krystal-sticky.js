
  (function ($) {
    $(document).ready(function () { 
        
        /*-- Window scroll function --*/
        $(window).on('scroll', function () {
          
            /* sticky header */        
            var sticky = $('header'),
            scroll = $(window).scrollTop();            

            if (scroll >= 190) {
                sticky.addClass('fixed');
                $('#logo-alt').css({'display': 'block'});
                $('a.custom-logo-link').css({'display': 'none'});                
                $(window).trigger('resize.px.parallax');                
                if( $('a').hasClass('logo-alt') && $('#logo-alt img').attr('src') != ''){
                    $('h1.site-title').css({'display': 'none'});
                }
                else{
                    $('h1.site-title').css({'display': 'block'});   
                }
            }
            else {               
                sticky.removeClass('fixed');
                $('#logo-alt').css({'display': 'none'});
                $('a.custom-logo-link').css({'display': 'block'});
                $(window).trigger('resize.px.parallax');                
                if( $('a').hasClass('custom-logo-link') && $('a.custom-logo-link img').attr('src') != ''){
                    $('h1.site-title').css({'display': 'none'});
                }
                else{
                    $('h1.site-title').css({'display': 'block'});   
                }
            }
          
        });
   });    

})(this.jQuery);