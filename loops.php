<?php

// // while loop
// $counter = 0;
// while ($counter < 10) {
//     echo $counter. '<br>';
//     // if ($counter === 5) {
//     //     break;
//     // }
//     $counter++;
// }

// // do - while

// do {

//     echo $counter;

//     $counter++;

// } while ($counter < 10);

// FOR LOOP
 for($i = 0; $i < 10; $i++) {
    echo $i. '<br>';
 }

 //FOR EACH LOOP
 $fruits = ["Banana", "Apple", "Orange"];
 foreach ($fruits as $i => $fruits) {
    echo $i.' '.$fruit. '<br>';
 };

 // Iterate Over associative array.
 $person = [
    'name' => 'Brad',
    'surname' => 'Traversy',
    'age' => 38,
    'hobbies' => ['Tennis', 'Video Games'],
 ];

 foreach ($person as $key => $value) {
    if (is_array($value)) {
        echo $key .' '. implode(",", $value) . '<br>';
    } else {
        echo $key .' '. $value .'<br>';
    }
 }









?>