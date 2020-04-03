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
    const TAX = .05;

    // protected abstract function getTax();
}

echo BankAccount::TAX;
$account1 = new BankAccount;

// $account1::$tax = 10;
