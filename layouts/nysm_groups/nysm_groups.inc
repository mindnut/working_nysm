<?php

/**
 * Implements hook_panels_layouts()
 */
$plugin = array(
    'title' => t('NYSM: School Group Layout'),
    'category' => t('NYSM: School Group'),
    'icon' => 'nysm_groups.png',
    'theme' => 'nysm_groups',
    //'admin css' => '../foundation_panels_admin.css',
    'regions' => array(
      'top' => t('Top'),
      'above_left' => t('Above Left'),
      'above_middle' => t('Above Middle'),
      'above_right' => t('Above Right'),
      'middle' => t('Middle'),
      'below_left' => t('Below Left'),
      'below_right' => t('Below Right'),
      'bottom' => t('Bottom'),
    ),
  );

