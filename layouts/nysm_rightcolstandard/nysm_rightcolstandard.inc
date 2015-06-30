<?php

/**
 * Implements hook_panels_layouts()
 */
$plugin = array(
    'title' => t('NYSM: Standard Page with Right Column'),
    'category' => t('NYSM: Standard Museum Pages'),
    'icon' => 'nysm_rightcolstandard.png',
    'theme' => 'nysm_rightcolstandard',
    //'admin css' => '../foundation_panels_admin.css',
    'regions' => array(
      'banner' => t('banner'),
      'subnav' => t('subnav'),
      'top' => t('top'),
      'main' => t('main'),
      'right' => t('right'),
      'bottom' => t('bottom')
    ),
  );


