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

    public function __construct(Person $person)
    {
        return $this->members[] = $person;
    }

    public function add(Person $person)
    {
        return $this->members[] = $person;
    }

    public function getMembers()
    {
        return $this->members;
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
$esther = new Person("Esther Akinloose");

$staff = new Staff($caleb);

$laracasts = new Business($staff);

$laracasts->hire($esther);

var_dump($staff->getMembers());
