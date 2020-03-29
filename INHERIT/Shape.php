<?php
abstract class Shape
{
    public $welcome = "This is a Shapes class, use it for creating your own shapes";

    protected $color;

    public function __construct($color)
    {
        return $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    abstract public function getArea($radius);
}

class Square extends Shape
{
    protected $length = 4;

    public function getArea($radius)
    {
        return pow($this->length, 2);
    }
}

class Triangle extends Shape
{
    protected $base = 4;

    protected $height = 7;

    public function getArea($radius)
    {
        return .5 * $this->base * $this->height;
    }

    public function getBase()
    {
        return $this->base;
    }
}

class Circle extends Shape
{
    public function getArea($radius)
    {
        return M_PI * pow($radius, 2);
    }
}

echo (new Circle("White"))->getArea(5);
