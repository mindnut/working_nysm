<?php

/**
 * Implements hook_panels_layouts()
 */
$plugin = array(
    'title' => t('Volunteer Form'),
    'category' => t('NYSM: Volunteer'),
    'icon' => 'volunteer.png',
    'theme' => 'volunteer',
    //'admin css' => '../foundation_panels_admin.css',
    'regions' => array(
      'top' => t('Top'),
      'first_name' => t('First Name'),
      'last_name' => t('Last Name'),
     
      
      'email' => t('Email'),
       'phone_number' => t('Phone Number'),
      'secondary_number' => t('Secondary Number'),
      'middle' => t('Middle'),
      'below_left' => t('Below Left'),
      'below_right' => t('Below Right'),
      'bottom' => t('Bottom'),
    ),
  );

