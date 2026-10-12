<?php

return array (
  'slug' => 'coupons-plus-for-woocommerce',
  'requires' => 
  array (
    'wp' => 5.8,
    'php' => 7.4,
  ),
  'urls' => 
  array (
    'plugin' => 'couponsplus.app',
    'organization' => 'neblabs.com',
  ),
  'files' => 
  array (
    'plugin' => 
    array (
      'in' => 'index.php',
      'out' => '((slug)).php',
    ),
    'readme' => 'readme.md',
  ),
  'pluginFile' => 'coupons-plus-for-woocommerce.php',
);