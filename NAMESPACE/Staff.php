<?php
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
