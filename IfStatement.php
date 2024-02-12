<?php

// If Statement salah satu kata kunci yang digunakan untuk percabangan
// Percabangan artinya mengeksekusi kode program tertentu ketika suatu kondisi terpenuhi

$nilai = 70;
$absen = 90;

if ($nilai >= 75 && $absen >= 75) {
    echo "Selamat Anda Lulus !!" . PHP_EOL;
} else {
    echo "Maaf, Anda tidak Lulus." . PHP_EOL;
}

// Else If Statement apabila membutuhkan beberapa kondisi
// Else If bisa lebih dari satu
// Syntax alternatif Elseif

if ($nilai >= 80 && $absen >= 80) :
    echo "Nilai Anda A" . PHP_EOL;
elseif ($nilai >= 70 && $absen >= 70) :
    echo "Nilai Anda B" . PHP_EOL;
elseif ($nilai >= 60 && $absen >= 60) :
    echo "Nilai Anda C" . PHP_EOL;
elseif ($nilai >= 50 && $absen >= 50) :
    echo "NIlai Anda D" . PHP_EOL;
else :
    echo "Nilai Anda E" . PHP_EOL;
endif;
