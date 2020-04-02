<?php
class Math
{
    public static function add(...$args)
    {
        return array_sum($args);
    }
}

class NewPerson
{
    public static $age = 0;

    public function haveBirthday()
    {
        return static::$age += 1;
    }
}

// echo (new Math)->add(1, 2, 3, 4, 5);

$joe = (new NewPerson)->age;
echo $joe;
// echo $joe->haveBirthday();
