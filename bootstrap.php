<?php
// constants
define('SITE_NAME', 'phapus');

// debug
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Auto includes
// Inclure les fichiers dans les dossiers model/ et controller/
function __autoload($classname) { 
    include_once("model/" . ucfirst($classname) . ".php"); 
} 
// foreach (glob('model/*') as $models)
// {
//   require_once $models;
// }
foreach (glob('controller/*') as $controllers)
{
  require_once $controllers;
}

// init
$controller = new Controller();
$controller->execute();
