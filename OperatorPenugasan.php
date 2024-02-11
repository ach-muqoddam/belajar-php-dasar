<?php

// Operator Penugasan di analogikan seperti shortcut Operator Aritmatika agar lebih singkat
// Seperti contoh $a + $b di shortcut menjadi $a += $b; begitupun sama halnya dengan operator aritmatika lainnya
$total = 0;

$fruit = 10_000;
$chicken = 20_000;
$orangejuice = 5_000;

$total += $fruit;
$total += $chicken;
$total += $orangejuice;

var_dump($total);
