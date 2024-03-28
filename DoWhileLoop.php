<?php 

// Do While Loop adalah versi perulangan yang mengecek 1 kali di eksekusi
// apabila nilai true maka lanjut, jika false maka berhenti

$counter = 100;

do{
    echo "Hello Do While Loop-" . $counter . PHP_EOL;
    $counter++;
}while ($counter <= 10);

echo "\n";
?>