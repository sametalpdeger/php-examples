<?php

class Person {
    public $name;
    public $age;
    
    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}

$person = new Person("John", 30);
echo $person->name;
echo $person->age;

?>