<?php

// tipe data null atau tipe data kosong
$tipeDataNull = null;

// tipde data boolean atau tipe data benar atau salah
$tipeDataBool1 = true;
$tipeDataBool2 = false;

// tipe data integer atau tipe data macam-macam bilangan
// bilangan Desimal = penulisan bilangan angka pada umumnya
// bilangan Biner = penulisan bilangan menambahkan 0b diawal bilangan
// bilangan Oktal = penulisan bilangan menambahkan 0 atau 0o diawal bilangan
// bilangan Hexadesimal = penulisan bilangan menambahkan 0x diawal bilangan
// PHP_INT_MAX = nilai maksimal integer
$tipeDataInt = PHP_INT_MAX;

// tipe data float atau tipe data bilangan pecahan
// E6 atau disebut notasi eksponensial digunakan untuk menulis bilangan juta
$tipeDataFloat = 1.5E6;

// tipe data string atau tipe data huruf
// 4 cara membuat string yaitu tanda petik tunggal, tanda petik ganda, heredoc, nowdoc
// tanda petik tunggal = ''
// tanda petik ganda = ""
// heredoc = <<< END
// nowdoc = <<< 'END'
$name = 'Hello, Adam';
$html = <<<END
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>demo PHP String Heredoc</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>$name</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
END;

var_dump($tipeDataNull);
var_dump($tipeDataBool1);
var_dump($tipeDataBool2);
var_dump($tipeDataInt);
var_dump($tipeDataFloat);
echo $html;
