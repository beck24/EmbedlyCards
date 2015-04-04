
$(document).ready(function() {
    
  var embedlyShare = $('#EmbedlyCards-settings').data('cardControls');
  var embedlyChrome = $('#EmbedlyCards-settings').data('cardChrome');
  var embedlyTheme = $('#EmbedlyCards-settings').data('cardTheme');
  var embedlyAnalytics = $('#EmbedlyCards-settings').data('cardAnalytics');
  var embedlyWidth = $('#EmbedlyCards-settings').data('cardWidth');
  
  // set our settings on each card
  $('.embedly-card').each(function(index, item) {
      $(item).attr('data-card-controls', embedlyShare);
      $(item).attr('data-card-chrome', embedlyChrome);
      $(item).attr('data-card-theme', embedlyTheme);
      $(item).attr('data-card-analytics', embedlyAnalytics);
      $(item).attr('data-card-width', embedlyWidth);
  });
   
  (function(w, d){
   var id='embedly-platform', n = 'script';
   if (!d.getElementById(id)){
     w.embedly = w.embedly || function() {(w.embedly.q = w.embedly.q || []).push(arguments);};
     var e = d.createElement(n); e.id = id; e.async=1;
     e.src = ('https:' === document.location.protocol ? 'https' : 'http') + '://cdn.embedly.com/widgets/platform.js';
     var s = d.getElementsByTagName(n)[0];
     s.parentNode.insertBefore(e, s);
   }
  })(window, document);
});