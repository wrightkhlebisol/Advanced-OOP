<?php

$caleb = new Person("Caleb Ogundiya");
$esther = new Person("Esther Akinloose");

$staff = new Staff($caleb);

$laracasts = new Business($staff);

$laracasts->hire($esther);

var_dump($staff->getMembers());
