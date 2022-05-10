<?php

require_once '../vendor/autoload.php';

spl_autoload_register(function($class) {
	require_once 'Core/' .$class. '.php';
});

require_once 'database.php';

$GLOBALS['base_path'] = '/mikros/public';