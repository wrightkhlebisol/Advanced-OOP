<?php

interface Animal
{
    public function communicate();
}

class Dog implements Animal
{
}

$bingo = new Dog;
