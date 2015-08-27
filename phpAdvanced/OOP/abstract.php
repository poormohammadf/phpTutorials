<?php
abstract class Animal
{
public $name;
public $age;

public function Describe()
{
return $this->name . ", " . $this->age . " years old";
}

abstract public function Greet();
}

class Dog extends Animal
{
    public function Greet()
    {
        return "Woof!";
    }

    public function Describe()
    {
        return parent::Describe() . ", and I'm a dog!";
    }
}

$animal = new Dog();
$animal->name = "Bob";
$animal->age = 7;
echo $animal->Describe();
echo $animal->Greet();