<?php

/**
 * Implements hook_panels_layouts()
 */
$plugin = array(
    'title' => t('Get Ready Layout for Guided Tours'),
    'category' => t('NYSM: Education'),
    'icon' => 'getreadyaccordion.png',
    'theme' => 'getreadyaccordion',
    //'admin css' => '../foundation_panels_admin.css',
    'regions' => array(
    	'directions' => t('Directions'),
    	'conduct' => t('Conduct Policy'),
        'meals' => t('Meal Options'),
        'chaperones' => t('Info for Chaperones'),
        'floorplan' => t('Floor Plans'),
        'museumfacts' => t('Museum Facts')
    ),
  );


