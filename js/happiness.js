jQuery(document).ready(function( $ ) {
  
  // Navigation Toggle
  var menuToggle = $('#js-centered-navigation-mobile-menu').unbind();
  $('#js-centered-navigation-menu').removeClass("show");
  
  menuToggle.on('click', function(e) {
    e.preventDefault();
    $('#js-centered-navigation-menu').slideToggle(function(){
      if($('#js-centered-navigation-menu').is(':hidden')) {
        $('#js-centered-navigation-menu').removeAttr('style');
      }
    });
  });


  // TypeKit Font loader
  WebFontConfig = {
      typekit: { id: 'vaz6tdr' }
   };

   (function(d) {
      var wf = d.createElement('script'), s = d.scripts[0];
      wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.6/webfont.js';
      s.parentNode.insertBefore(wf, s);
   })(document);


});
