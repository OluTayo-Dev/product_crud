<?php

  function hello()
  {
    echo "Hello I am Olusola";
  }

  hello();
  hello();
  hello(); 
 
  //function with argument
//   function hello($name)
//   {
//     return  echo "Hello I am $name";
//   }
//  echo  hello('Zura');
//  echo  hello('Brad');

 // Create sum of two functions
// function sum($a, $b)
// {
//     return $a + $b;
   
// }
// echo sum(4, 5);
//   function sum(...$nums)
//  {
//      echo '<pre>';
//      var_dump($nums);
//      echo '</pre>';
//  }
//  echo sum(1,2,3,4,5,6);

//  function sum(...$nums)
// {
//   $sum = 0;
//   foreach ($nums as $n) {
//     $sum += $n;
//   }
//   return $sum;
// }
// echo sum(1,2,3,4,5,6) 

//Arrow function
 function sum(...$nums)
 {
   return array_reduce($nums, fn($carry, $n) => $carry + $n);
 }
 echo sum(1,2,3,4,5,6);

?>