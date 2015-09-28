<?php

/**
 * Implements hook_panels_layouts()
 */
$plugin = array(
    'title' => t('User Page'),
    'category' => t('NYSM: Standard Museum Pages'),
    'icon' => 'researchcollections.png',
    'theme' => 'userpage',
    //'admin css' => '../foundation_panels_admin.css',
    'regions' => array(
    	'banner' => t('banner'),
    	'subnav' => t('subnav'),
    	'top' => t('top'),
    	'middleleft' => t('Middle Larger Left'),
    	'middleright' => t('Right Side column'),
        'bottom' => t('bottom')

    ),
  );