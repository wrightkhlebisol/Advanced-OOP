<?php
class Person
{
    protected $name;

    public function __construct($name)
    {
        return $this->name = $name;
    }
}

class Staff
{
    protected $members = [];

    public function __construct($members = [])
    {
        $this->members[] = $members;
    }

    public function add(Person $person)
    {
        $this->members[] = $person;
    }
}

class Business
{
    protected $staff;

    public function __construct(Staff $staff)
    {
        $this->staff = $staff;
    }

    public function hire(Person $person)
    {
        // add person to staff collection
        $this->staff->add($person);
    }
}

$caleb = new Person("Caleb Ogundiya");

$staff = new Staff;

$laracasts = new Business($staff);
$laracasts->hire($caleb);

var_dump($staff);
