<?php

$first = [
    "first_name" => "ACH"
];

$last = [
    "first_name" => "ACHMAD",
    "last_name" => "MUQODDAM"
];

$full = $last + $first;
var_dump($full);

$a = [
    "first_name" => "Rizki",
    "midle_name" => "Aulia",
];

$b = [
    "midle_name" => "Aulia",
    "first_name" => "Rizki",
];

var_dump($a == $b);
var_dump($a === $b);
