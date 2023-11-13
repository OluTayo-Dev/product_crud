<?php
$age = 22;
$salary = 30000;

 if($age === 20) {
    echo "1";
 }

 //without curly braces
 if ($age === 28)

     echo "1";

     //Difference between == and ===
     $age == 20; // true
     $age == '20'; // true


     $age === 20; // true;
     $age === '20';// false
     
    // if AND 
    if ($age > 20 && $salary === 30000) {
        echo "Do something";
    }

  // TERNARY IF
  echo $age < 22 ? "Young" : "Old";

  // Short Ternary
  $myAge = $age ?: 18;
  echo '<pre>';
  var_dump($myAge);
  echo '</pre>';
  
  //Null coalescing operator
  $myName = isset($name) ? $name : 'John';
  $myName = $name ?? 'John';


  // switch statement
  $userRole = 'admin';
  switch ($userRole) {
    case 'admin';
      echo 'admin';
      break;
    case 'editor';
     echo 'editor';
     break;
    case 'user';
    echo 'user';
    break;
    default;
    echo 'Invalid role';
  }


























?>
