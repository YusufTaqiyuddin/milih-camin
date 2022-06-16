<?php
define('BASEAPP', dirname(dirname(__FILE__)).'/');

// Load Config
require_once 'config/config.php';
require_once 'core/App.php';
require_once 'core/Load.php';
require_once 'core/Controller.php';
require_once 'core/Database.php';
require_once '../vendor/autoload.php';


$app = new App;

// spl_autoload_register(function($className){
//     require_once 'libraries/'.$className.'.php';
// });