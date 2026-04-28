<?php
// this site's root
define('BASE_PATH', realpath(__DIR__) . '/');

// The root of all sites (e.g., /usr/share/nginx/html/)
define('GLOBAL_ROOT', realpath(__DIR__ . '/../') . '/');

// Specific shortcuts for your shared libraries
define('VOCALSYNTH_PATH', GLOBAL_ROOT . 'vocalsynth/');
define('LUNATINE_PATH', GLOBAL_ROOT . 'lunatine/');