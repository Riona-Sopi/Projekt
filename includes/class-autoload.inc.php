<?php 

spl_autoload_register("autoload");

function autoload($className) {
  $path = 'hustlers-ubt/classes/';
  $extension = '.class.php';
  $fileName = $path . $className . $extension;

  if(!file_exists($fileName)) {
    return false;
  }

  include_once $fileName;
}