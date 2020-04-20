/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - https://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function (Drupal, $, window) {

  // To understand behaviors, see https://www.drupal.org/node/2269515
  Drupal.behaviors.basic = {
    attach: function (context, settings) {

            
      $(window).load(function () {
        responseBody();
        
        $("body.path-frontpage").ripples({
          perturbance: 0.02,          
        });
        $("body.path-frontpage").ripples('drop', 100, 100, 10, .02);
        $('.juicebox-container').find(':first-child').focus();  
          
      $( "#superfish-main-toggle" ).click(function(){
        
           if ($('.sf-accordion').hasClass('sf-expanded')){
            $('.sf-accordion').hide();
            $('.sf-accordion').slideDown(400, function() {
              $(this).addClass("open");              
              //$('.layout-container').addClass("push");            
            });         
           }else{           
                $(this).removeClass("open");
                //$('.layout-container').removeClass("push");
            }        
        });        
     });
    

     $(window).resize(function () {
        responseBody();
     });

     $(window).scroll(function () {
        // Execute code when the window scrolls.
        //$('.sf-accordion-toggle').fadeOut("'slow");
        $('.sf-accordion-toggle').stop(true, true).hide().fadeIn('slow');
     });
    }
  };
  
  function responseBody(){
    if ( $( "#superfish-main-toggle" ).length ) { 
            $( "body" ).addClass('responsive');         
        }else{
            $( "body" ).removeClass('responsive');
        }
  }

} (Drupal, jQuery, this));
