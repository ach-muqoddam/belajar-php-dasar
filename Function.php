<?php 

// Function adalah blok kode program yang akan berjalan saat kita panggil
// untuk membuat function di PHP, kita bisa menggunakan kata kunci function, lalu diikuti dengan nama function, kurung () dan diakhiri dengan block
// memanggil function dengan nama menggunakan nama function lalu diikuti dengan kurung ()
// di bahasa pemrograman lain, function juga disebut dengan method

function sayHai() {
    echo "Hallo Saya Adam". PHP_EOL;
}

sayHai();

echo "\n";

// PHP sengat flexible dalam pembuatan function
// tidak seperti pada bahasa pemrograman lain yang harus ada aturan lokasi dimana membuat function
// di PHP kita bebas membuat function dimanapun, bisa di dalam if statement, di dalam function, dan sebagainya
// namun perlu di ingat, jika kode function yang belum dieksekusi oleh PHP, maka function tersebut tidak akan bisa digunakan

$buat = true;

if ($buat) {
    function sayHello()
    {
        echo "Hello Function". PHP_EOL;
    }
}

sayHello();


?>