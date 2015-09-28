<?php

/**
 * Implements hook_panels_layouts()
 */
$plugin = array(
    'title' => t('NYSM: 2 column standard with fullwidth header'),
    'category' => t('NYSM: Standard Museum Pages'),
    'icon' => 'nysm_2colstandard.png',
    'theme' => 'nysm_2colstandard',
    //'admin css' => '../foundation_panels_admin.css',
    'regions' => array(
      'banner' => t('banner'),
      'subnav' => t('subnav'),
      'top' => t('top'),
      'right_col' => t('Right Column'),
      'main' => t('main'),
      'bottom' => t('bottom')
    ),
  );


