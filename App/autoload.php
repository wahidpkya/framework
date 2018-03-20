<?php 

spl_autoload_register(function($class){
	require_once "../App/Config/{$class}.php";
});

$GLOBALS['path'] = "/framework/public/css/";




 ?>