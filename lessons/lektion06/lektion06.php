<?php

$string = 'Hallo';
echo gettype($string); // string
echo '<hr>';

$zahl = 5;
echo gettype($zahl); // integer
echo '<hr>';

echo gettype(gettype($zahl)); // string
echo '<hr>';

$nichts = NULL; // 
$nichts = null; // 
echo gettype($nichts); // NULL
echo '<hr>';

$bool = true;
echo gettype($bool);



