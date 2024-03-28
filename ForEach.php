<?php 

// Mengakses data perulangan sangat bertele-tele yaitu harus membuat counter, lalu mengakses array menggunaka  counter yang telah dibuat
// Namun untungnya, di PHP terdapat perulangan foreach, yang bisa digunakan untuk mengakses seluruh data array secara otomatis

$name = ['ACH', 'MUQODDAM'];
$person = [
    'first_name'    => 'Ach',
    'last_name'     => 'Muqoddam',
];

// perulangan tanpa foreach
for ($i = 0; $i < count($name); $i++) {
    echo "Data ke $i adalah $name[$i]" . PHP_EOL;
}

echo "\n";

// perulangan menggunakan foreach
foreach ($name as $index => $names) {
    echo "Data ke $index = $names" . PHP_EOL;
}

echo "\n";

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}

?>