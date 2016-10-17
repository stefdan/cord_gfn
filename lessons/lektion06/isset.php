<?php

$x = 7;

echo isset($x);  // true -> 1

echo '<hr>';

echo isset($y);  // false hat keine Ausgabe

echo '<hr>';

unset($x);

echo '<hr>';

echo isset($x);  // false

$z = "";

echo '<hr>';

echo empty($z);  // true

