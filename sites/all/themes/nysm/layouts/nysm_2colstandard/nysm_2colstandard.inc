<?php

/**
 * Implements hook_panels_layouts()
 */
$plugin = array(
    'title' => t('NYSM: 2 column standard'),
    'category' => t('NYSM: 2'),
    'icon' => 'nysm_2colstandard.png',
    'theme' => 'nysm_2colstandard',
    //'admin css' => '../foundation_panels_admin.css',
    'regions' => array(
      'top' => t('top'),
      'leftnav' => t('leftnav'),
      'main' => t('main'),
      'bottom' => t('bottom')
    ),
  );


