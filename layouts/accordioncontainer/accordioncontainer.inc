<?php

/**
 * Implements hook_panels_layouts()
 */
$plugin = array(
    'title' => t('Accordion Container for Paragraphs'),
    'category' => t('Accordion: Container'),
    'icon' => 'accordioncontainer.png',
    'theme' => 'accordioncontainer',
    //'admin css' => '../foundation_panels_admin.css',
    'regions' => array(
        'title' => t('title'),
        'panelul' => t('Panel UL')
    ),
  );

