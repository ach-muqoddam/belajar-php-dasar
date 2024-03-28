<?php 

for ($counter = 1; $counter <= 5; $counter++) {
    if ($counter % 2 == 1) {
        continue;
    }
    echo "ini bilangan ke-" . $counter . PHP_EOL;
}

?>