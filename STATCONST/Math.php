<?php
class Math
{
    public function add(...$args)
    {
        return array_sum($args);
    }
}

echo (new Math)->add(1, 2, 3, 4, 5);
