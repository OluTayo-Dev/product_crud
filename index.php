<?php 

$String1 = "Hello World";
$String2 ='Hello word';

echo  $String1;



//Increment Operator;
//   echo  ++$a;
//   echo  $a++;

// Decrement Operator


 //Numer Checking functions
// $a--
// ---$a
// is_float(1.25); // true
// is_nemeric("3.45")
// is_int(5)
// is_double(1.25)


// Conversion
$strNumber = '12.34';
$number = (float)$strNumber;
$number = intval($strNumber);
var_dump($number);


echo "abs(-15) " . abs(-15) . '<br>';
echo "pow(2, 3) " . pow(2,3) . '<br>';
echo "sqrt(16) "  . sqrt(16) .  '<br>';
echo "max(2, 3) " . max(2, 3) . '<br>';
echo "min(2, 3)"  . min(2,3)  .'<br>';
echo "round(2.4) " . round(2.4) .'<br>';
echo "round(2.6) " . round(2.6) . '<br>';
echo "floor(2.6)"  . floor(2.6) . '<br>';
echo "ceil(2.4)"   . ceil(2.4) . '<br>';

// Formatting Numbers
$number = 123456789.12345; // 
echo number_format($number, 2) .'<br>';

//Strings
$name = 'Olusola';
$string  = 'Hello '.$name;
$string2 = "Hello Olusola";

echo $string. '<br>';
echo $string2. '<br>';


// String concatenation
echo 'Hello '.' World'.' and PHP'.'<br>';

// String functions
$string = "   Hello World     ";


echo "1 - " . strlen($string) . '<br>';
echo "2 - " . trim($string) . '<br>';
echo "3 - " . ltrim($string) . '<br>';
echo "4 - " .rtrim($string) . '<br>';
echo "5 - " .str_word_count($string) . '<br>';
echo "6 - " .strrev($string) . '<br>';
echo "7 - " . strtoupper($string) . '<br>';
echo "8 - " .strtolower($string) . '<br>';
echo "9 - " .ucfirst('hello') . '<br>';
echo "10 - " .lcfirst('HELLO') . '<br>' ;
echo "11 - " .ucwords('hello world') . '<br>';
echo "12 - " .strpos($string, 'world') . '<br>';
echo "13 - " .stripos($string, 'world') . '<br>';
echo "14 - " .substr($string, 8) . '<br>';
echo "15 - " . str_replace('World', 'PHP', $string) . '<br>';
echo "16 - " .str_ireplace('world', 'PHP', $string) . '<br>';


//Multiline text and line breaks

$longText = " 
Hello, my name is Olusola
I  am 27,
I love my daughter 
";
echo $longText. '<br>';
echo nl2br($longText) .'<br>';


echo "1 - " . htmlentities($longText) . '<br>';



//ARRAYS
//$fruits = [] or array();

$fruits = ["Banana", "Apple", "Orange"];


echo '<pre>';

var_dump($fruits);
 echo '</pre>';


 $fruits[0] = 'Peach';
 echo '<pre>';
 var_dump($fruits);
 echo '</pre>';


 // Append Element
 
 $fruits[] = 'Peach';
 echo '<pre>';
 var_dump($fruits);
 echo '</pre>';

 // Print the length of the array
 echo count($fruits). '<br>';

 //Add element at the end of the array
  array_push($fruits, 'foo');
  echo '<pre>';
  var_dump($fruits);
  echo '</pre>';

  //Remove element from the end of the array
   echo array_pop($fruits);
   echo '<pre>';
   var_dump($fruits);
   echo '</pre>';


   //Add element at the begining of the array
   array_unshift($fruits, 'bar');

   echo '<pre>';
   var_dump($fruits);
   echo '</pre>';

   //Remove element from the begining of the Array
    echo array_shift($fruits);


    // Split the string into an array
    $string = "Banana, Apple, Peach";
    explode(",", $string);
    echo '<pre>';
    var_dump(explode($fruits));
    echo '</pre>';

 //Combine array element into a string;
 implode("&", $fruits);


 //Check if element exist in the array;
 echo '<pre>';
 var_dump(in_array('Mango', $fruits));
 echo '</pre>';

//Array Search
echo '<pre>';
var_dump(array_search('Mango', $fruits));
echo '</pre>';

//Merge two arrays
echo '<pre>';
$vegetables = ["Potato, cucumber"];
array_merge($fruits, $vegetables);
echo '</pre>';

//Sorting of array(Reverse order)
echo '<pre>';
var_dump($fruits);
echo '</pre>';
rsort($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';


//Null coalescing assignment operator
if(!isset($person['address'])) {
    $person['address'] = 'unknown';
}
$person['addres'] ??= 'unknown';



//Associative Arrays

// Creating an associative array
$person = [
    'name' => 'Brad',
    'surname' => 'Traversy',
    'age' => 38,
    'hobbies' => ['Tennis', 'Video Game']
];

echo '<pre>';
var_dump($person);
print_r($person);
echo '</pre>';


//Two dimensional arrays 

$todos = [
    ['title' => 'Todo title 1', 'completed' => true],
    ['title' => 'Todo title 1', 'completed' => false]
];

echo '<pre>';
var_dump($todso);
echo '</pre>';
?>


