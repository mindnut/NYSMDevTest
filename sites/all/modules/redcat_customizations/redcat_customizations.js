  function redcat_customizations_update_month() {
    Drupal.settings.redcat_customizations_current_year = year = Drupal.settings.redcat_customizations_current_date.substring(0, 4);
    Drupal.settings.redcat_customizations_current_month = month = Drupal.settings.redcat_customizations_current_date.substring(5);
    var dates = Drupal.settings.redcat_event_dates;
    if (dates[year] != undefined && dates[year][month] != undefined) {
 
      $('.ui-datepicker-calendar td').not('.ui-datepicker-other-month').each(function(index, value) {
        var year = Drupal.settings.redcat_customizations_current_year;
        var month = Drupal.settings.redcat_customizations_current_month;
        var dates = Drupal.settings.redcat_event_dates;
        var date = redcat_customizations_pad(index + 1);
        if (dates[year][month][date] != undefined) {
          $(this).addClass('has-event');
        }
      });
    }