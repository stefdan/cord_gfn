<?php

$zahl = 2147483647;

echo gettype($zahl) .'<hr>';  // integer

$zahl++;

echo gettype($zahl) .'<hr>';  // double

echo is_int($zahl) .'<hr>';  // false

$s = "Hallo";
echo intval($s) . '<hr>';  // 0

$s1 = "10";
echo intval($s1) . '<hr>';  // 0

$s2 = "10 Liter";
echo intval($s2) . '<hr>';  // 10

$b = true;
echo intval($b) . '<hr>';  // 1 (false wäre 0)

echo is_float($b) . '<hr>';  // false

echo strlen('Hallo Welt') . '<hr>';  // 10




