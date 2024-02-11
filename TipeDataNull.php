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
// cara pertama
echo "Is variable NULL? ";
echo "\n";
echo "variabel name?";
var_dump(is_null($name));
echo "\n";
echo "variabel age?";
var_dump(is_null($age));
echo "\n";

// cara kedua
// lebih direkomendasikan
echo "saya ingin mengecek variabel yang kosong: ";
echo "\n";
echo "variabel name?";
var_dump(isset($name));
echo "\n";
echo "variabel age?";
var_dump(isset($age));

// menghapus varibel
// apabila variabel dihapus maka variabel tersebut sudah tidak ada dan tidak bisa di gunakan kembali
$contoh = "ini contoh variabel yang mau dihapus";
unset($contoh);

echo $contoh;
