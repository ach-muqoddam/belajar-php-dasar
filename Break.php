<?php 
 // Pada Switch statement, kita sudah mengenal kata kunci break, yaitu untuk menghentikan case dalam switch
 // sama dengan dalam perulangan, break juga dapat digunakan untuk menghentikan seluruh perulangan
 // namun berbeda dengan continue, continue digunakan untuk menghentikan perulangan saat ini, lalu melanjutkan ke perulangan selanjutnya

$counter = 1;

while (true) {
    echo "ini perulangan ke-" . $counter . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        break;
    }
}

?>