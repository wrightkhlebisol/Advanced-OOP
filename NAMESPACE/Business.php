<?php

namespace Laracasts;

use Laracasts\Users\Person;

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
