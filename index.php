<?php

include 'Mammal.php';
include 'Person.php';

$james = new Person("James");

$james->introduceSelf();

$james->whatIsWeight();

$james->eat('Sandwich', 1);

$james->whatIsWeight();
$james->whatIsWeight();
$james->whatIsWeight();
$james->whatIsWeight();

$james->eat('Takeout', 6);

$james->whatIsWeight();

$james->whatIsYourBloodTemperature();