<?php 

// Function Argumen atau bisa disebut Parameter
// bisa mengirimkan informasi ke function yang ingin dipanggil
// cara membuat argument sama seperti cara membuat variable
// argument di tempatkan di dalam kurung () di deklarasi function
// argument bisa lebih dari satu, jika lebih dari satu, harus dipisah menggunakan tanda koma
// jika menggunakan default argument value dan argument lebih dari 1 disarankan default argument valuenya di terakhir, jika di awal akan error

function sayHello($firstName, $lastName = "Unknow") {
    echo "Hello $firstName $lastName". PHP_EOL;
}

sayHello("Ach", "Muqoddam");
sayHello("Ach");

echo "\n";

// Function Type Declaration

function sum(int $first, int $last ) {
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}

sum(5, 5);
sum("10", "10");
sum(true, true);

echo "\n";

// Variable-length Argument List
// function implode berfungsi mengubah array ke string

function sumAll(...$values) {
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total ". implode(",", $values) . " = $total" . PHP_EOL;
}

$values = [10, 20];

sumAll(1,2,3,4,5);
sumAll(...$values);

echo "\n";

// Return Type Declarations

?>