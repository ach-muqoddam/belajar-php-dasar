<?php

// penggunaan if statement pada kasus seperti bisa dipersingkat menggunakan ternary operator
// ternary operator menggunakan kata kunci (?) dan (:)
$gender = "PRIA";
$hi = $gender == "WANITA" ? "Hi bro!" : "Hi nona!";

echo $hi . PHP_EOL;
