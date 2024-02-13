<?php

// sebelum mengetahui bahwa data kosong di presentasikan dengan data NULL di PHP
// biasanya untuk melakukan itu, perlu menggunakan pengecekan if statement dengan function isset($variable)
// namun untungnya di PHP ada NULL Coalescing Operator menggunakan tanda ??

$data = [
    "action" => "Create"
];

$action = $data['action'] ?? 'Nothing!!!';

echo $action . PHP_EOL;
