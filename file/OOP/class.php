<html>
    <body>
        <h1> The fruit program </h1>


        <?php 
                class Fruit {


                   public $name;
                   public $color;

                    function set_name($name) {
                    $this-> name = $name;
                   }

                    function get_name() {
                     return $this-> name;
                   }
                }




                //VISIBILITY AND INHERITANCE IN OOP

                class Person  {
                    protected $first = "Daniel";
                    private $last = "Nielsen";
                    private $age = "28";


                   
                }



                class Pet extends Person {
                    public function owner() {
                        $a = $this->first;
                        return $a;
                    }
                }


                $a = FirstClass::EXAMPLE;
                echo $a;

                // Scope Resolution Operators in OOP PHP

                class FirstClass {
                    // Properties
                    const EXAMPLE = "You can't chnage this!";


                    // Methods
                    public static function test() {
                        $testing = "This is a test!";
                        return $testing;
                    }
                }


                class SecondClass extends FirstClass {
                    // Properties
                    public static $staticProperty = "A static property!";


                    // Methods
                    public static function anotherTest() {
                        echo parent::EXAMPLE;
                        echo self::$staticProperty;
                    }
                }

                $b = SecondClass::anotherTest();
                echo $b;

              
        ?>

    </body>
</html>