<?php

/**
 * Implements hook_panels_layouts()
 */
$plugin = array(
    'title' => t('NYSM: 3 free rows'),
    'category' => t('NYSM: 1'),
    'icon' => 'nysm_1row.png',
    'theme' => 'nysm_1row',
    //'admin css' => '../foundation_panels_admin.css',
    'regions' => array(
      'top' => t('Top'),
      'middle' => t('Middle'),
      'bottom' => t('Bottom')
    ),
  );


