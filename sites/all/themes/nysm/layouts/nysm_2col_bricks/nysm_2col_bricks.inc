<?php

/**
 * Implements hook_panels_layouts()
 */
$plugin = array(
    'title' => t('NYSM: 2 column bricks'),
    'category' => t('NYSM: 2'),
    'icon' => 'nysm_2col_bricks.png',
    'theme' => 'nysm_2col_bricks',
    //'admin css' => '../foundation_panels_admin.css',
    'regions' => array(
      'top' => t('Top'),
      'above_left' => t('Above Left'),
      'above_right' => t('Above Right'),
      'middle' => t('Middle'),
      'below_left' => t('Below Left'),
      'below_right' => t('Below Right'),
      'bottom' => t('Bottom'),
    ),
  );

