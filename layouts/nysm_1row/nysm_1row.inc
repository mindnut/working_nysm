<?php

/**
 * Implements hook_panels_layouts()
 */
$plugin = array(
    'title' => t('NYSM: 1 Row'),
    'category' => t('NYSM: 1'),
    'icon' => 'nysm_1row.png',
    'theme' => 'nysm_1row',
    //'admin css' => '../foundation_panels_admin.css',
    'regions' => array(
      'banner' => t('banner'),
      'subnav' => t('subnav'),
      'top' => t('Top'),
      'middle' => t('Middle'),
      'bottom' => t('Bottom')
    ),
  );


