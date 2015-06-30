<?php

/**
 * Implements hook_panels_layouts()
 */
$plugin = array(
    'title' => t('NYSM: 3 exhibition Node page'),
    'category' => t('NYSM: exhibitions'),
    'icon' => 'nysm_exhibitions.png',
    'theme' => 'nysm_exhibitions-node',
    //'admin css' => '../foundation_panels_admin.css',
    'regions' => array(
      'banner' => t('banner'),
      'subnav' => t('subnav'),
      'top' => t('top'),
       'left' => t('Left'),
      'middle' => t('Middle'),
      'right' => t('Right'),
      'bottom' => t('bottom')
    ),
  );


