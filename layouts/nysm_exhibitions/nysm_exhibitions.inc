<?php

/**
 * Implements hook_panels_layouts()
 */
$plugin = array(
    'title' => t('NYSM: 1 exhibitions page'),
    'category' => t('NYSM: exhibitions'),
    'icon' => 'nysm_exhibitions.png',
    'theme' => 'nysm_exhibitions',
    //'admin css' => '../foundation_panels_admin.css',
    'regions' => array(
      'banner' => t('banner'),
      'subnav' => t('subnav'),
      'top' => t('top'),
      'main' => t('main'),
      'bottom' => t('bottom')
    ),
  );


