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

    public static function haveBirthday()
    {
        return static::$age += 1;
    }
}

class BankAccount
{
    public static $tax = .05;

    protected abstract function getTax();
}

echo BankAccount::$tax;
$account1 = new BankAccount;
$account1::$tax = 10;
