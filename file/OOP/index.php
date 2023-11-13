<?php
// What is class and instance?
// A class is a blueprint, it is a template or a new data type out which 
 // we can create a variable. Variables are called Instances or data type
 class Person {
    public $name;
    public $surname;
    private $age;
    public static $counter = 0;
 }

 $p = new Person();
 $p->name = 'Olusola';
 $p->surname = 'Temitayo';
 echo '<pre>';
 var_dump($p);
 echo '</pre>';
 //Creating Constructor
 public function __construct($name, $surname)
 {
    $this->name = $name;
    $this->surname = $surname;
    self::$counter++;
 }

 public function setAge($age)
 {
    $this->age = $age;
 }
 
  public function getAge()
  {
    return $this->age;
  }

  public function getCounter()
  {
    return self::$counter;
  }
 $p = new Person("Brad", "Traversy");
 $p->setAge(30);
 echo '<pre>';
 var_dump($p)
 echo '</pre>';
 echo $p->getAge();

 $p2 = new Person('John', 'Smith');
 echo '<pre>';
 var_dump($p2);
 echo '</pre>';
 echo Person::$getCounter;
//  $p2->name = 'John';
//  $p2->surname = 'Traversy';

//Create Person class in Person.php


// Create instance of Person


//Using setter and getter
?>