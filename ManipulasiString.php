<?php

//  Manipulasi String
$name = "Ach Muqoddam";

echo "Nama Saya Adalah: " . $name . PHP_EOL;

// Manipulasi String untuk konversi ke Number dan sebaliknya
$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)1.01;
var_dump($valueFloat);

// Manipulasi String untuk Mengakses Karakter
$name = "Adam";

echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[3] . PHP_EOL;

// Manipulasi String menggunakan Variable Parsing
$namaAs = "ADAM";

echo "Nama panggilan saya $namaAs, Selamat Belajar PHP" . PHP_EOL;

// Manipulasi String mengggunakan Curly Brace
$var = "var";

echo "This is {$var}s " . PHP_EOL;
