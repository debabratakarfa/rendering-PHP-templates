<?php

// Autoload the class
function __autoload($class) {

	require_once $class.".php";

}

use PRT as PRT;

define( 'PRT_DISPLAY_ROOT', __DIR__ );

$file_path = PRT_DISPLAY_ROOT . '/template/demo.php';

echo PRT::render( $file_path, array(
	  'name' => 'Test',
	) );

?>