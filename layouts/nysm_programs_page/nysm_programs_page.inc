<?php

/**
 * Implements hook_panels_layouts()
 */
$plugin = array(
    'title' => t('NYSM: 2 column row for PROGRAM Page'),
    'category' => t('NYSM: 2'),
    'icon' => 'nysm_programs_page.png',
    'theme' => 'nysm-programs-page',
    //'admin css' => '../foundation_panels_admin.css',
    'regions' => array(
      'top' => t('top'),
      'left' => t('Event List'),
      'right' => t('Program Nav'),
      'bottom' => t('Bottom')
    ),
  );


