<?php

/**
 * Implements hook_panels_layouts()
 */
$plugin = array(
    'title' => t('NYSM: Top/bottom '),
    'category' => t('NYSM: 1'),
    'icon' => 'nysm_3colexhib.png',
    'theme' => 'nysm_topbottom',
    //'admin css' => '../foundation_panels_admin.css',
    'regions' => array(
      'top' => t('Top'),
      'bottom' => t('Bottom')
    ),
  );


