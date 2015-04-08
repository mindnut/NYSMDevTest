When unzipped, the plugin should be moved to sites/all/modules/custom or 
sites/all/modules.

This module requires the 3rd party library for FullCalendar located at
http://arshaw.com/fullcalendar.

To use the Event Calendar module:
  1) Install PHP, Date Popup, Better Exposed Filters, Views UI, and
Fullcalendar Colors modules
  2) add some events node/add/event.
  3) to view the calendar of the events, go to /event-calendar page.
  4) to view the Events List, go to /events-list page.
  5) to administer the popup window, 
go to admin/structure/types/manage/event/display/event_calendar
  6) to administer the taxonomy, go to admin/structure/taxonomy/event_category
  7) to administer the taxonomy colors,
go to admin/config/user-interface/colors/taxonomy
  8) to administer the datepiker block,
admin/structure/block/manage/views/event_calendar-datepicker_block/configure