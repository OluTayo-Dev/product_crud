<?php



class Person {
    //Properties
    public $name;
    public $eyeColor;
    $public $age;

   
   // Static Properties
    public static $drinkingAge = 21;
    
    // Methods
    public function setName($name)  {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
    
    // Static Method
     public static function setDrinkingAge($newDA) {
         self::$drinkingAge = $newDA;
     }

     public function getDA($newDA) {
        self::$drinkingAge = $newDA;
     }

    // Constructor
    public function __construct($name, $eyeColor, $age) {
        $this->name = $name;
        $this->name = $eyeColor;
        $this->name = $age;
    }
    // Destructor
    public function __destruct() {
        
    }
}