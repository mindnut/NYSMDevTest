<?php

/**
 * Implements hook_panels_layouts()
 */
$plugin = array(
    'title' => t('NYSM: 3 column row'),
    'category' => t('NYSM: 3'),
    'icon' => 'nysm_3col.png',
    'theme' => 'nysm_3col',
    //'admin css' => '../foundation_panels_admin.css',
    'regions' => array(
      'top' => t('top'),
      'left' => t('Left'),
      'middle' => t('Middle'),
      'right' => t('Right')
    ),
  );


