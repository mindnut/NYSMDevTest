<?php

/**
 * Implements hook_panels_layouts()
 */
$plugin = array(
    'title' => t('NYSM: 3 column row for PROGRAM NODE'),
    'category' => t('NYSM: 3'),
    'icon' => 'nysm_programs.png',
    'theme' => 'nysm_programs',
    //'admin css' => '../foundation_panels_admin.css',
    'regions' => array(
      'top' => t('top'),
      'left' => t('Left'),
      'middle' => t('Middle'),
      'right' => t('Right')
    ),
  );


