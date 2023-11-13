<?php
// How to load Classess Automatically in OOP
  spl_autoload_register();

  function myAutoLoader($className) {
    $path = "classes/";
    $extension = ".class.php";
    $fullPath = $path . $className . $extension;


    if(!file_exists($fullPath)) {
        return false;
    }

    include_once $fullPath;
  }

  ?>