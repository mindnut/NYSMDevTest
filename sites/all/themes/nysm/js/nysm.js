(function ($, Drupal) {

  Drupal.behaviors.nysm = {
    attach: function(context, settings) {

	$('#nav').localScroll(800);
	
	//.parallax(xPosition, speedFactor, outerHeight) options:
	//xPosition - Horizontal position of the element
	//inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
	//outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
	$('body').parallax("50%", 0.0);
	$('.highlighted-image').parallax("50%", 0.2);

      // Get your Yeti started.
    }
  };

})(jQuery, Drupal);