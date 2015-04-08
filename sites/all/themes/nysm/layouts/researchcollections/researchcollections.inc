<?php

/**
 * Implements hook_panels_layouts()
 */
$plugin = array(
    'title' => t('Research and Collections homepage'),
    'category' => t('ResearchCollections: 2'),
    'icon' => 'researchcollections.png',
    'theme' => 'researchcollections',
    //'admin css' => '../foundation_panels_admin.css',
    'regions' => array(
      'top' => t('top'),
      'mainstory' => t('Main Story'),
      'topright' => t('Top Right')
    ),
  );


