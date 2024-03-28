<?php 

// While Loop adalah versi perulangan yang lebih sederhana dibandingkan For Loop
// dhi While Loop hanya terdapat kondisi perulangan, tanpa ada init statement dan post statement

$counter = 1;

while ($counter <= 10) {
    echo "Hello While Loop-" . $counter . PHP_EOL;
    $counter++;
}

echo "\n";

$cek = 11;
// syntax alternatif While Loop
while ($counter <= 20) :
    echo "Hello WHile Loop-" . $counter . PHP_EOL;
    $counter++;
endwhile;
?>