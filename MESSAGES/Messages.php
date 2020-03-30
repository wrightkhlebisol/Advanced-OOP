<?php
class Person
{
    protected $name;

    public function __construct($name)
    {
        return $this->name = $name;
    }
}

class Business
{
    public function __construct()
    {
    }

    public function hire(Person $person)
    {
        // add person to staff collection
    }
}

class staff
{
}
