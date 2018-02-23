<?php

class Person {
    private $name;
    private $age;

    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function sayIdentity() {
        echo "Hello, my name is $this->name and I'm $this->age.\n";
    }

    public function incrementAge() {
        $this->age = $this->age + 1;
    }
}

$caroline = new Person('Caroline', 26);
$dorian = new Person('Dorian', 25);

$caroline->sayIdentity();
$caroline->incrementAge();
$caroline->sayIdentity();
$dorian->sayIdentity();
