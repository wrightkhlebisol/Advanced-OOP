<?php
class Person
{
    public $age;

    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        if ($age < 18) {
            throw new Exception("Age cannot be less than 18");
        } else {
            $this->age = $age;
        }
    }

    public function getAge()
    {
        return $this->age;
    }
}

$john = new Person('John Doe');
try {
    $john->setAge(30);
} catch (Exception $e) {
    var_dump($e);
}

var_dump($john->getAge());
// var_dump($john);
