(function($) {

Drupal.fullcalendar.plugins.event_calendar = {
  options: function (fullcalendar, settings) {
    return {
      eventMouseover: function(event, jsEvent, view) {
        if (!$('div.tooltip', this).get(0)) {
          settings.eventVars = new Object;
          settings.eventVars.url = $(this).attr('href').replace(window.location.origin, '');
          settings.eventVars.dateLink = $('div.fullcalendar-content a[href="' + settings.eventVars.url + '"]');
          settings.eventVars.container = settings.eventVars.dateLink.parent().parent();
          settings.eventVars.tooltip = $('div.tooltip', settings.eventVars.container).html();
          settings.eventVars.html = '<div class="tooltip"><div class="tooltip-holder">' + settings.eventVars.tooltip + '</div></div>';
          $(this).append(settings.eventVars.html);
          $('div.tooltip', this).hide();
        };
        $('div.tooltip', this).stop(false, true).fadeIn(250).addClass('hover');
      },
      eventMouseout: function(event, jsEvent, view) {
        $('div.tooltip', this).stop(false, true).fadeOut(150).removeClass('hover');
      },
      eventRender: function(event, element, view) {
	  if(event.end!=null){
	  	element.addClass('few-days');
	  }
        if(event.start.getMonth() !== view.start.getMonth()) {
          return false;
        }
      }
    };
  }
};

}(jQuery));