<?php

// Switch adalah statement percabangan yang sama dengan If, namun lebih sederhana cara pembuatannya
// kondisi Switch hanya untuk perbandingan

$nilai = "B";

// switch ($nilai) {
//     case "A";
//         echo "Anda lulus dengan sangat baik." . PHP_EOL;
//         break;
//     case "B";
//     case "C";
//         echo "Anda Lulus." . PHP_EOL;
//         break;
//     case "D";
//         echo "Anda tidak Lulus." . PHP_EOL;
//         break;
//     default:
//         echo "Mungkin Anda salah jurusan." . PHP_EOL;
// }

// sytax alternatif switch statement
switch ($nilai):
    case "A":
        echo "Anda lulus dengan sangat baik." . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda Lulus." . PHP_EOL;
        break;
    case "D":
        echo "Anda tidak Lulus." . PHP_EOL;
        break;
    default:
        echo "Mungkin Anda salah jurusan." . PHP_EOL;
endswitch;
