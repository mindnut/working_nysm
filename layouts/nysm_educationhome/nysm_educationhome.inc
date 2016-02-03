<?php

/**
 * Implements hook_panels_layouts()
 */
$plugin = array(
    'title' => t('NYSM: education homepage'),
    'category' => t('NYSM: Education'),
    'icon' => 'nysm_educationhome.png',
    'theme' => 'nysm_educationhome',
    //'admin css' => '../foundation_panels_admin.css',
    'regions' => array(
      'banner' => t('banner'),
      'subnav' => t('subnav'),
      'top' => t('top'),
      'main' => t('main'),
      'educator' => t('educator'),
      'student' => t('student'),
      'family' => t('family'),
      'right' => t('right'),
      'bottom' => t('bottom')
    ),
  );


