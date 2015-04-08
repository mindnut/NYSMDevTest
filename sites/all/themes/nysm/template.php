<?php

/**
 * Implements template_preprocess_html().
 *
 */
//function nysm_preprocess_html(&$variables) {
//  // Add conditional CSS for IE. To use uncomment below and add IE css file
//  drupal_add_css(path_to_theme() . '/css/ie.css', array('weight' => CSS_THEME, 'browsers' => array('!IE' => FALSE), 'preprocess' => FALSE));
//
//  // Need legacy support for IE downgrade to Foundation 2 or use JS file below
//  // drupal_add_js('http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js', 'external');
//}

/**
 * Implements template_preprocess_page
 *
 */
//function nysm_preprocess_page(&$variables) {
//}

/**
 * Implements template_preprocess_node
 *
 */
//function nysm_preprocess_node(&$variables) {
//}

/**
 * Implements hook_preprocess_block()
 */
//function nysm_preprocess_block(&$variables) {
//  // Add wrapping div with global class to all block content sections.
//  $variables['content_attributes_array']['class'][] = 'block-content';
//
//  // Convenience variable for classes based on block ID
//  $block_id = $variables['block']->module . '-' . $variables['block']->delta;
//
//  // Add classes based on a specific block
//  switch ($block_id) {
//    // System Navigation block
//    case 'system-navigation':
//      // Custom class for entire block
//      $variables['classes_array'][] = 'system-nav';
//      // Custom class for block title
//      $variables['title_attributes_array']['class'][] = 'system-nav-title';
//      // Wrapping div with custom class for block content
//      $variables['content_attributes_array']['class'] = 'system-nav-content';
//      break;
//
//    // User Login block
//    case 'user-login':
//      // Hide title
//      $variables['title_attributes_array']['class'][] = 'element-invisible';
//      break;
//
//    // Example of adding Foundation classes
//    case 'block-foo': // Target the block ID
//      // Set grid column or mobile classes or anything else you want.
//      $variables['classes_array'][] = 'six columns';
//      break;
//  }
//
//  // Add template suggestions for blocks from specific modules.
//  switch($variables['elements']['#block']->module) {
//    case 'menu':
//      $variables['theme_hook_suggestions'][] = 'block__nav';
//    break;
//  }
//}

//function nysm_preprocess_views_view(&$variables) {
//}

/**
 * Implements template_preprocess_panels_pane().
 *
 */
//function nysm_preprocess_panels_pane(&$variables) {
//}

/**
 * Implements template_preprocess_views_views_fields().
 *
 */
//function nysm_preprocess_views_view_fields(&$variables) {
//}

/**
 * Implements theme_form_element_label()
 * Use foundation tooltips
 */
//function nysm_form_element_label($variables) {
//  if (!empty($variables['element']['#title'])) {
//    $variables['element']['#title'] = '<span class="secondary label">' . $variables['element']['#title'] . '</span>';
//  }
//  if (!empty($variables['element']['#description'])) {
//    $variables['element']['#description'] = ' <span data-tooltip="top" class="has-tip tip-top" data-width="250" title="' . $variables['element']['#description'] . '">' . t('More information?') . '</span>';
//  }
//  return theme_form_element_label($variables);
//}

/**
 * Implements hook_preprocess_button().
 */
//function nysm_preprocess_button(&$variables) {
//  $variables['element']['#attributes']['class'][] = 'button';
//  if (isset($variables['element']['#parents'][0]) && $variables['element']['#parents'][0] == 'submit') {
//    $variables['element']['#attributes']['class'][] = 'secondary';
//  }
//}

/**
 * Implements hook_form_alter()
 * Example of using foundation sexy buttons
 */
//function nysm_form_alter(&$form, &$form_state, $form_id) {
//  // Sexy submit buttons
//  if (!empty($form['actions']) && !empty($form['actions']['submit'])) {
//    $form['actions']['submit']['#attributes'] = array('class' => array('primary', 'button', 'radius'));
//  }
//}

// Sexy preview buttons
//function nysm_form_comment_form_alter(&$form, &$form_state) {
//  $form['actions']['preview']['#attributes']['class'][] = array('class' => array('secondary', 'button', 'radius'));
//}


/**
 * Implements template_preprocess_panels_pane().
 */
// function zurb_foundation_preprocess_panels_pane(&$variables) {
// }

/**
* Implements template_preprocess_views_views_fields().
*/
/* Delete me to enable
function THEMENAME_preprocess_views_view_fields(&$variables) {
 if ($variables['view']->name == 'nodequeue_1') {

   // Check if we have both an image and a summary
   if (isset($variables['fields']['field_image'])) {

     // If a combined field has been created, unset it and just show image
     if (isset($variables['fields']['nothing'])) {
       unset($variables['fields']['nothing']);
     }

   } elseif (isset($variables['fields']['title'])) {
     unset ($variables['fields']['title']);
   }

   // Always unset the separate summary if set
   if (isset($variables['fields']['field_summary'])) {
     unset($variables['fields']['field_summary']);
   }
 }
}

// */

/* 
function nysm_preprocess_render_link($link) {
  $output = '';

  // This is a duplicate link that won't get the dropdown class and will only
  // show up in small-screen.
  $small_link = $link;

  if (!empty($link['#below'])) {
    $link['#attributes']['class'][] = 'has-dropdown';
  }

  // Put a class in to give us the active trail.
 foreach(menu_get_active_trail() as $trail_item){

    $link_mlid = isset($link['#original_link']['mlid'])? $link['#original_link']['mlid'] : "";
    if( isset($trail_item['mlid']) && $link_mlid != "" && $link_mlid == $trail_item['mlid'] ){
      $link['#attributes']['class'][] = 'active-trail';  
   }  
 }


  // Render top level and make sure we have an actual link.
  if (!empty($link['#href'])) {
    $rendered_link = NULL;

    // Foundation offers some of the same functionality as Special Menu Items;
    // ie: Dividers and Labels in the top bar. So let's make sure that we
    // render them the Foundation way.
    if (module_exists('special_menu_items')) {
      if ($link['#href'] === '<nolink>') {
        $rendered_link = '<label>' . $link['#title'] . '</label>';
      }
      else if ($link['#href'] === '<separator>') {
        $link['#attributes']['class'][] = 'divider';
        $rendered_link = '';
      }
    }

    if (!isset($rendered_link)) {
      $rendered_link = theme('nysm_menu_link', array('link' => $link));
    }

    // Test for localization options and apply them if they exist.
    if (isset($link['#localized_options']['attributes']) && is_array($link['#localized_options']['attributes'])) {
      $link['#attributes'] = array_merge($link['#attributes'], $link['#localized_options']['attributes']);
    }
    $output .= '<li' . drupal_attributes($link['#attributes']) . '>' . $rendered_link;

    if (!empty($link['#below'])) {
      // Add repeated link under the dropdown for small-screen.
      $small_link['#attributes']['class'][] = 'show-for-small';
      $sub_menu = '<li' . drupal_attributes($small_link['#attributes']) . '>' . l($link['#title'], $link['#href'], $link['#localized_options']);

      // Build sub nav recursively.
      foreach ($link['#below'] as $sub_link) {
        if (!empty($sub_link['#href'])) {
          $sub_menu .= nysm_render_link($sub_link);
        }
      }

      $output .= '<ul class="dropdown">' . $sub_menu . '</ul>';
    }

    $output .=  '</li>';
  }

  return $output;
}

*/

/**
 * Implements hook_css_alter().
 */

function nysm_css_alter(&$css) {
  // Always remove base theme CSS.
  $theme_path = drupal_get_path('theme', 'zurb_foundation');

  foreach($css as $path => $values) {
    if(strpos($path, $theme_path) === 0) {
      unset($css[$path]);
    }
  }
}

/**
 * Implements hook_js_alter().
 */


function nysm_js_alter(&$js) {
  // Always remove base theme JS.
  $theme_path = drupal_get_path('theme', 'zurb_foundation');

  foreach($js as $path => $values) {
    if(strpos($path, $theme_path) === 0) {
      unset($js[$path]);
    }
  }
}




function nysm_preprocess_image(&$variables){
  foreach (array('width','height') as $key){
        unset($variables[$key]);
  }
}


/**
 * Implements theme_links() targeting the main menu specifically.
 * Formats links for Top Bar http://foundation.zurb.com/docs/components/top-bar.html
 */
/** function nysm_links__topbar_main_menu($variables) {
  // We need to fetch the links ourselves because we need the entire tree.
  $links = menu_tree_output(menu_tree_all_data(variable_get('menu_main_links_source', 'main-menu')));
  $output = nysm_links($links);
  $variables['attributes']['class'][] = 'left';

  return '<ul' . drupal_attributes($variables['attributes']) . '>' . $output . '</ul>';
}

/**
 * Implements theme_links() targeting the secondary menu specifically.
 * Formats links for Top Bar http://foundation.zurb.com/docs/components/top-bar.html
 */
/** function nysm_links__topbar_secondary_menu($variables) {
  // We need to fetch the links ourselves because we need the entire tree.
  $links = menu_tree_output(menu_tree_all_data(variable_get('menu_secondary_links_source', 'user-menu')));
  $output = nysm_links($links);
  $variables['attributes']['class'][] = 'right';

  return '<ul' . drupal_attributes($variables['attributes']) . '>' . $output . '</ul>';
}



/**
 * Helper function to output a Drupal menu as a Foundation Top Bar.
 *
 * @param array
 *   An array of menu links.
 *
 * @return string
 *   A rendered list of links, with no <ul> or <ol> wrapper.
 *
 * @see zurb_foundation_links__system_main_menu()
 * @see zurb_foundation_links__system_secondary_menu()
 */
/** function nysm_links($links) {
  $output = '';

  foreach (element_children($links) as $key) {
    $output .= nysm_preprocess_render_link($links[$key]);
  }

  return $output;
}
/**
 * Helper function to recursively render sub-menus.
 *
 * @param array
 *   An array of menu links.
 *
 * @return string
 *   A rendered list of links, with no <ul> or <ol> wrapper.
 *
 * @see _nysm_links()
 */



/** function nysm_preprocess_render_link($link) {
  $output = '';

  // This is a duplicate link that won't get the dropdown class and will only
  // show up in small-screen.
  $small_link = $link;

  if (!empty($link['#below'])) {
    $link['#attributes']['class'][] = 'has-dropdown';
  }

  // Render top level and make sure we have an actual link.
  if (!empty($link['#href'])) {
    $rendered_link = NULL;

    // Foundation offers some of the same functionality as Special Menu Items;
    // ie: Dividers and Labels in the top bar. So let's make sure that we
    // render them the Foundation way.
    if (module_exists('special_menu_items')) {
      if ($link['#href'] === '<nolink>') {
        $rendered_link = '<label>' . $link['#title'] . '</label>';
      }
      else if ($link['#href'] === '<separator>') {
        $link['#attributes']['class'][] = 'divider';
        $rendered_link = '';
      }
    }

    // If this item is active and/or in the active trail, add necessary classes.
     $active_classes = nysm_in_active_trail($link['#href']);
    if (isset($link['#attributes']['class'])) {
      $link['#attributes']['class'] = array_merge($link['#attributes']['class'], $active_classes);
    }
    else {
      $link['#attributes']['class'] = $active_classes;
    }

    // Test for localization options and apply them if they exist.
    if (isset($link['#localized_options']['attributes']) && is_array($link['#localized_options']['attributes'])) {
  //    $link['#attributes'] = array_merge_recursive($link['#attributes'], $link['#localized_options']['attributes']);
      $link['#attributes'] = array_merge($link['#attributes'], $link['#localized_options']['attributes']);
   }
    // Drupal add the 'active' class on links, but we add 'active-trail' to
    // match Bartik theme
    if (in_array('active-trail', $active_classes)) {
      if(isset($link['#localized_options']['attributes']['class']) && is_array($link['#localized_options']['attributes']['class'])) {
        $link['#localized_options']['attributes']['class'][] = 'active-trail';
      }
      else {
        $link['#localized_options']['attributes']['class'] = array('active-trail');
     }
     }

    // Render our link using the #localized_options array for the options
    if (!isset($rendered_link)) {
      $rendered_link = theme('zurb_foundation_menu_link', array('link' => $link));
    }
    
    $output .= '<li' . drupal_attributes($link['#attributes']) . '>' . $rendered_link;

    if (!empty($link['#below'])) {
      // Add repeated link under the dropdown for small-screen.
      $small_link['#attributes']['class'][] = 'show-for-small';
      $sub_menu = '<li' . drupal_attributes($small_link['#attributes']) . '>' . l($link['#title'], $link['#href'], $link['#localized_options']);

      // Build sub nav recursively.
      foreach ($link['#below'] as $sub_link) {
        if (!empty($sub_link['#href'])) {
          $sub_menu .= nysm_preprocess_render_link($sub_link);
        }
      }

      $output .= '<ul class="dropdown">' . $sub_menu . '</ul>';
    }

    $output .=  '</li>';
  }

  return $output;
}


/**
 * Checks whether an item is active or in the active trail.
 *
 * This is based on the code in the core toolbar module
 * /modules/toolbar/toolbar.module function toolbar_in_active_trail($path)
 *
 * @param
 *   The path of a menu item we're evaluating
 *
 * @return
 *   An array of classes if active or in the active trail.
 *   An empty array if not active or in the active trail.
 *
 * @todo
 *   Look at migrating to a menu system level function.
 */
/** function nysm_in_active_trail($link_path) {
  $classes = array();
  // if we're on the front page, we're either active or not and we don't need
  // to process anything else. This simplifies the rest too.
  if ($link_path == '<front>' &&  drupal_is_front_page()) {
    $classes[] = 'active';
    return $classes;
  }
  if ($link_path != '<front>' &&  drupal_is_front_page()) {
    return $classes;
  }

  // If the current page matches the item path,it's active.
  // If you comment out the return statement, you'll get both 'active' and
  // 'active-trail' classes if the the item is in a menu hierarchy
  if ($link_path == current_path()) {
    $classes[] = 'active';
    return $classes;
  }

  // We're not on the front page so we need to check to see if we're in the
  // active trail even for active items in keeping with Bartik style.
  $active_paths = &drupal_static(__FUNCTION__);

  // Gather active paths.
  // We filter out <front> because we only want that active if we're on the
  // front page.
  if (!isset($active_paths)) {
    $active_paths = array();
    $trail = menu_get_active_trail();
    foreach ($trail as $item) {
      if (!empty($item['href']) && $item['href'] != '<front>') {
        $active_paths[] = $item['href'];
      }
    }
  }

  if (in_array($link_path, $active_paths)) {
    $classes[] = 'active-trail';
  }

  // If we haven't matched yet, we're not going to.
  return $classes;
}


/*function nysm_form_comment_form_alter(&$form, &$form_state, $form_id)
  {
    $form['comment_body']['#after_build'][] = 'remove_tips';
  }
  
  function remove_tips(&$form)
  {
    unset($form['und'][0]['format']['guidelines']);
    unset($form['und'][0]['format']['help']);
    return $form;
  }

*/



/**
 * Theme function override for multiple-value form widgets.
 *
 * @see theme_field_multiple_value_form()
 */
/** function nysm_theme_field_multiple_value_form($variables) {
  $element = $variables['element'];
  $output = '';
 
  // The first condition is the override.
  if (($element['#cardinality'] > 1 || $element['#cardinality'] == FIELD_CARDINALITY_UNLIMITED) && isset($element[0]['#nodrag'])) {
    $table_id = drupal_html_id($element['#field_name'] . '_values');
    $required = !empty($element['#required']) ? theme('form_required_marker', $variables) : '';
 
    $header = array(
      array(
        'data' => '<label>' . t('!title !required', array('!title' => $element['#title'], '!required' => $required)) . "</label>",
        'class' => array('field-label'),
      ),
    );
    $rows = array();
 
    // Sort items according to weight
    $items = array();
    foreach (element_children($element) as $key) {
      if ($key === 'add_more') {
        $add_more_button = &$element[$key];
      }
      else {
        $items[] = &$element[$key];
      }
    }
    usort($items, '_field_sort_items_value_helper');
 
    // Add the items as table rows.
    foreach ($items as $key => $item) {
      // We don't want the weight to render.
      unset($item['_weight']);
      $cells = array(
        drupal_render($item),
      );
      $rows[] = array(
        'data' => $cells,
      );
    }
 
    $output = '<div class="form-item">';
    $output .= theme('table', array(
      'header' => $header,
      'rows' => $rows,
      'attributes' => array(
        'id' => $table_id,
        'class' => array('field-multiple-table'),
      ),
    ));
    $output .= $element['#description'] ? '<div class="description">' . $element['#description'] . '</div>' : '';
    $output .= '<div class="clearfix">' . drupal_render($add_more_button) . '</div>';
    $output .= '</div>';
  }
  elseif ($element['#cardinality'] > 1 || $element['#cardinality'] == FIELD_CARDINALITY_UNLIMITED) {
    $table_id = drupal_html_id($element['#field_name'] . '_values');
    $order_class = $element['#field_name'] . '-delta-order';
    $required = !empty($element['#required']) ? theme('form_required_marker', $variables) : '';
 
    $header = array(
      array(
        'data' => '<label>' . t('!title !required', array('!title' => $element['#title'], '!required' => $required)) . "</label>",
        'colspan' => 2,
        'class' => array('field-label'),
      ),
      t('Order'),
    );
    $rows = array();
 
    // Sort items according to '_weight' (needed when the form comes back after
    // preview or failed validation).
    $items = array();
    foreach (element_children($element) as $key) {
      if ($key === 'add_more') {
        $add_more_button = &$element[$key];
      }
      else {
        $items[] = &$element[$key];
      }
    }
    usort($items, '_field_sort_items_value_helper');
 
    // Add the items as table rows.
    foreach ($items as $key => $item) {
      $item['_weight']['#attributes']['class'] = array($order_class);
      $delta_element = drupal_render($item['_weight']);
      $cells = array(
        array(
          'data' => '',
          'class' => array('field-multiple-drag'),
        ),
        drupal_render($item),
        array(
          'data' => $delta_element,
          'class' => array('delta-order'),
        ),
      );
      $rows[] = array(
        'data' => $cells,
        'class' => array('draggable'),
      );
    }
 
    $output = '<div class="form-item">';
    $output .= theme('table', array(
      'header' => $header,
      'rows' => $rows,
      'attributes' => array(
        'id' => $table_id,
        'class' => array('field-multiple-table'),
      ),
    ));
    $output .= $element['#description'] ? '<div class="description">' . $element['#description'] . '</div>' : '';
    $output .= '<div class="clearfix">' . drupal_render($add_more_button) . '</div>';
    $output .= '</div>';
 
    drupal_add_tabledrag($table_id, 'order', 'sibling', $order_class);
  }
  else {
    foreach (element_children($element) as $key) {
      $output .= drupal_render($element[$key]);
    }
  }
 
  return $output;
} */

/**
 * Implements hook_field_widget_form_alter().
 */

function nysm_field_widget_form_alter(&$element, &$form_state, $context) {
  if (isset($element['#field_name'])) {
    switch ($element['#field_name']) {
      case 'field_datetime':
        $element['#nodrag'] = TRUE;
      case 'field_classes':
        $element['#nodrag'] = TRUE;
      default:
        break;
    }
  }
}

/** function nysm_menu_alter(&$items) {
  $items['user/%user']['title callback'] = 'nysm_user_menu_title';
}
function nysm_user_menu_title() {
   if (arg(0) == 'user') {
        // Load uid from url
        $user = user_load(arg(1));
        // Get the full user name somehow; here, I'm calling a function of my own.
        $output = $user->field_displayed_name['und'][0]['safe_value'];
    }
    // Fallback to username if no fields are present
    if (empty($output)) {
        $output = $user->name;
    }
    return $output;
}*/