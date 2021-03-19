<?php
// start session
session_start();
// set the SESSION logged in false if it is not set yet
if(!isset($_SESSION['loggedin'])) {
  $_SESSION['loggedin'] = false;
}
//Load Config
require_once 'helpers/messenger.php';
require_once 'helpers/redirect.php';
require_once 'config/config.php';
//Load Libraries
// require_once 'libraries/Core.php';
// require_once 'libraries/controller.php';
// require_once 'libraries/Database.php';

//AUTOLOADER FOR TRAITS
spl_autoload_register(function($traitName) {
  $fileName = stream_resolve_include_path('traits/'. $traitName . '.php');
  if($fileName !== false) {
    include $fileName;
  }
});

//AUTOLOADER FOR LIBRARY CLASSES
spl_autoload_register(function($className) {
  require_once 'libraries/' . $className . ".php";
  
});

// spl_autoload_register(function($traitName) {
//   require_once 'traits/' . $traitName . ".php";
// });
