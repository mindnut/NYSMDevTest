<?php

/**
 * Implements hook_panels_layouts()
 */
$plugin = array(
    'title' => t('NYSM: 2 column row 20/80'),
    'category' => t('NYSM: 2'),
    'icon' => 'nysm_2col1.png',
    'theme' => 'nysm_2col1',
    //'admin css' => '../foundation_panels_admin.css',
    'regions' => array(
      'left' => t('Left'),
      'right' => t('Right')
    ),
  );


