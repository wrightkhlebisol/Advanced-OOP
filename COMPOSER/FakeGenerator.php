<?php
require_once 'vendor/autoload.php';

$faker = Faker\Factory::create();

echo $faker->password(20, 20);
