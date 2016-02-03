<?php

/**
 * Implements hook_panels_layouts()
 */
$plugin = array(
    'title' => t('Accordion Layout for Class List'),
    'category' => t('NYSM: Education'),
    'icon' => 'classaccordion.png',
    'theme' => 'classaccordion',
    //'admin css' => '../foundation_panels_admin.css',
    'regions' => array(
    	'toppanel' => t('Top Panel'),
    	'midpanel' => t('Middle'),
        'botpanel' => t('Bottom Panel')
    ),
  );


