<?php
  include 'includes/properties.php'

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

<!DOCTYPE />
<html lang="en" dir="ltr">

    <head>
        <meat charset="utf-8">
            <title></title>
   </head>

   <body>


     <?php
      $pet01 = new Person();


      echo $pet01->first;
    ?>

    <?php 
    $person1 = new Person();
    echo $person1->setName("Daniel");
    echo $person1->name;

    $person2 = new Person();
    echo $person2->setName("Timmy");
    echo $person2->name;

    ?>


  </body>
</html>
