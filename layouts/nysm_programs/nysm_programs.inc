<?php

/**
 * Implements hook_panels_layouts()
 */
$plugin = array(
    'title' => t('NYSM: 3 column row for PROGRAM NODE'),
    'category' => t('NYSM: Programs'),
    'icon' => 'nysm_programs.png',
    'theme' => 'nysm_programs',
    //'admin css' => '../foundation_panels_admin.css',
    'regions' => array(
      'banner' => t('banner'),
      'subnav' => t('subnav'),
      'top' => t('top'),
      'left' => t('Left'),
      'right' => t('Right'),
      'bottom' => t('bottom')
    ),
  );


