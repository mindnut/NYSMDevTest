<?php

/**
 * Implements hook_panels_layouts()
 */
$plugin = array(
    'title' => t('NYSM: 3 column standard'),
    'category' => t('NYSM: 3'),
    'icon' => 'nysm_3colstandard.png',
    'theme' => 'nysm_3colstandard',
    //'admin css' => '../foundation_panels_admin.css',
    'regions' => array(
      'top' => t('top'),
      'leftnav' => t('leftnav'),
      'main' => t('main'),
      'right' => t('right'),
      'bottom' => t('bottom')
    ),
  );


