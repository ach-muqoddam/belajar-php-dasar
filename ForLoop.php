<?php
// For adalah salah satu kata kunci yang bisa digunakan untuk melakukan perulangan
// Blok kode yang terdapat di dalam for akan selalu diulangi selama kondisi for terpenuhi
// Sintaks Perulangan For
// for(init statement; kondisi; post statement){
// block perulangan
// }

// for(init statement; kondisi; post statement){
    // block perulangan
// }

// init statement = dieksekusi hanya sekali di awal sebelum perulangan
// $counter = 1;

// kondisi = dilakukan pengecekan dalam setiap perulangan, jika true perulanganlanjut, jika false perulangan akan berhenti
for ($counter = 1; $counter <= 10; $counter++) {
    echo "Hello For Loop : " . $counter . PHP_EOL;

    // post statement = dieksekusi setiap kali perulangan
    // $counter++;
}

// syntax alternatif For Loop
for ($counter = 1; $counter <= 10; $counter++) :
    echo "Hello For Loop ke-" . $counter . PHP_EOL;
endfor;
