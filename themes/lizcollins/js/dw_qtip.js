jQuery.noConflict();
jQuery(document).ready(function($) {
   // Match all <A/> links with a title tag and use it as the content (default).
   $('a#credits[title]').qtip( {
	       position: {
	      my: 'bottom center', 
	      at: 'top center'
	   },
	   style: {
	      tip: true,
	      classes: 'ui-tooltip-dark ui-tooltip-cluetip'
	   }
	});
});