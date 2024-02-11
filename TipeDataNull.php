<?php
$name = "Adam";

$age = 23;
$age = NULL;

echo "Perkenalkan nama saya: ";
echo $name;
echo "\n";
echo "Saya berumur: ";
echo $age;
echo "\n";

// mengecek variabel NULL
echo "Is variable NULL? ";
var_dump(is_null($name));
var_dump(is_null($age));
