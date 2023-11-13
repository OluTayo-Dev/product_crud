<?php
/** User: TheCodeholic ... */


class Person {
    public string $name;
    public string $surname;
    private int $age;
    public static int $counter = 0;



    public function __contruct($name, surname)
    {
        $this->name = $name;
        $this->surname = $surname;
        self::$counter++;
    }
}

// Student Class

class Student extends Person
{
    
}
?>