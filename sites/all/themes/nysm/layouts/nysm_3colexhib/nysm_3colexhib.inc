<?php

/**
 * Implements hook_panels_layouts()
 */
$plugin = array(
    'title' => t('NYSM: 3-column Top/bottom Ongoing Exhibitions'),
    'category' => t('NYSM: 2'),
    'icon' => 'nysm_3colexhib.png',
    'theme' => 'nysm_3colexhib',
    //'admin css' => '../foundation_panels_admin.css',
    'regions' => array(
      'top' => t('Top'),
      'bottom' => t('Bottom')
    ),
  );


