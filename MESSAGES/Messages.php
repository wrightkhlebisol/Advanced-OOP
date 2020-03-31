<?php

$caleb = new Laracasts\Person("Caleb Ogundiya");
$esther = new Laracasts\Person("Esther Akinloose");

$staff = new Laracasts\Staff($caleb);

$laracasts = new Laracasts\Business($staff);

$laracasts->hire($esther);

var_dump($staff->getMembers());
