<?php

/**
 * Implements hook_panels_layouts()
 */
$plugin = array(
    'title' => t('NYSM: 2 column row Blank no-style'),
    'category' => t('NYSM: 2'),
    'icon' => 'nysm_2colblank.png',
    'theme' => 'nysm_2colblank',
    //'admin css' => '../foundation_panels_admin.css',
    'regions' => array(
      'left' => t('Left'),
      'right' => t('Right')
    ),
  );


