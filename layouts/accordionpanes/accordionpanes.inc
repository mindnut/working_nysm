<?php

/**
 * Implements hook_panels_layouts()
 */
$plugin = array(
    'title' => t('Accordion Panes'),
    'category' => t('Accordion: Panes'),
    'icon' => 'accordionpanes.png',
    'theme' => 'accordionpanes',
    //'admin css' => '../foundation_panels_admin.css',
    'regions' => array(
        'title' => t('title'),
        'paneid' => t('Panel ID'),
        'panecontent' => t('Panel LI Content')
    ),
  );

