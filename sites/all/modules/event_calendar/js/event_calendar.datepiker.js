(function($) {

Drupal.behaviors.event_calendar = {
  attach: function(context, settings) {
    if (!$("#ajax-loading").get(0)) {
      $("")
        .prependTo("body");
      $("#ajax-loading").bind("ajaxSend", function(){
        $(this).show();
      }).bind("ajaxComplete", function(){
        $(this).hide();
      });
    }
    $.getJSON(Drupal.settings.basePath + "event-calendar/json", function(data) {
      var eventDates = [];
      $.each(data, function(key, val) {
        var dateArray = key.toString().split('-');
        var dateString = dateArray[0] + '/' + dateArray[1] + '/' + dateArray[2];
        var dateFormatted = new Date(dateString);
            dateFormatted = dateFormatted.getFullYear() + '-' +
              (dateFormatted.getMonth() + 1) + '-' + dateFormatted.getDate();
        if (eventDates[dateFormatted] == undefined) {
          eventDates[dateFormatted] = new Array;
        }
        eventDates[dateFormatted].push(val);
      });
      
     var calendarCookieYear = $.cookie('event_calendar_year');
      var calendarCookieMonth = $.cookie('event_calendar_month');
      if (document.URL.indexOf(Drupal.settings.basePath + 'programs/month') >= 0) {
		  var url = document.URL, 
    		shortUrl=url.substring(url.lastIndexOf("/")+1);
		  var defaultDate = new Date(shortUrl);
	  }
	  else {
        var defaultDate = new Date();
      }

      defaultDate.setMonth(defaultDate.getMonth(), 1);
      
      var holder = new Drupal.behaviors.event_calendar.dateHolder(eventDates);
      $('div.events-datepicker', context).datepicker({
          beforeShowDay: function(date) {
            return holder.before(date);
          },
          onSelect: function (dateText, ui) {
            return holder.select(dateText, ui);
          },
          onChangeMonthYear: function(year, month, inst) {
            $.cookie('event_calendar_year', year);
            $.cookie('event_calendar_month', month);
          },
          defaultDate: defaultDate
      });
    });
  },
  dateHolder: function(eventDates) {
    this.before = function (date) {
      date = date.getFullYear() + '-' + (date.getMonth() + 1) + '-' + date.getDate();
      if (eventDates[date]) return [true, 'with_events'];
      return [false, 'without_events'];
    },
    this.select = function (dateText, ui) {
      var dateFrom = new Date(dateText);
      var dateFromStr = dateFrom.getFullYear() + '-'
        + Drupal.behaviors.event_calendar.addLeadingZero((dateFrom.getMonth() + 1)) + '-'
        + Drupal.behaviors.event_calendar.addLeadingZero(dateFrom.getDate());
      
      var query = dateFromStr;
      
      var url = Drupal.settings.basePath + 'programs/month/' + query;
      window.location = url;
    }
  },
  addLeadingZero: function(dayOrMonth) {
    if (dayOrMonth < 10) dayOrMonth = '0' + dayOrMonth.toString();
    return dayOrMonth;
  }
};

}(jQuery));