<?php

/**
 * Implements hook_panels_layouts()
 */
$plugin = array(
    'title' => t('NYSM: 2-row Top/bottom Exhibitions'),
    'category' => t('NYSM: 2'),
    'icon' => 'nysm_2colexhib.png',
    'theme' => 'nysm_2colexhib',
    //'admin css' => '../foundation_panels_admin.css',
    'regions' => array(
      'top' => t('Top'),
      'bottom' => t('Bottom')
    ),
  );


