<?php

/**
 * Implements hook_panels_layouts()
 */
$plugin = array(
    'title' => t('Header and Subnav only '),
    'category' => t('ResearchCollections: Header and Subnav Only'),
    'icon' => 'researchcollections.png',
    'theme' => 'headersubnav',
    //'admin css' => '../foundation_panels_admin.css',
    'regions' => array(
    	'banner' => t('banner'),
    	'subnav' => t('subnav')
    ),
  );


