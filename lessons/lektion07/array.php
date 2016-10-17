<?php
/*
// $x = [1,2,3,4];  // PHP 5.3
$x = []; 
$y = array(1,2,3,4);

// var_dump($x);

$x[] = 1;
$x[3] = 4;

$x[] = 5;
$x[] = array(1,2,3,4);

$x[] = 'Hallo';
$x[] = 5.55;

unset($x[4]);
unset($x[7]); // wird nicht wieder vergeben
$x[] = 5.55;

$x['person'] = 'Peter';

array_push($x, 'neu');

var_dump($x);

// print_r($x);
// var_export($x);

echo $x['person'];

// $z = array('vorname' => 'Cord', 'nachname' => 'Mählmann');
$z = ['vorname' => 'Cord', 'nachname' => 'Mählmann'];

var_dump($z);

echo is_array($z) . '<hr>';  // true

echo count($x) . '<hr>';

echo $x[5][1] . '<hr>';

$text = 'Heute ist ein toller Tag.';

$ei = explode(' ', $text);

shuffle($ei);

var_dump($ei);

$textNeu = implode(' ', $ei);

var_dump($textNeu);

var_dump(in_array('ein', $ei));

// array_reverse()

// array_keys()
*/
$a = [0 => 7, 5 => 6, 12 => 19];

var_dump($a);
/*
var_dump(array_keys($a));
var_dump(array_values($a));
*/
var_dump(array_pop($a));
var_dump($a);

var_dump(array_shift($a));
var_dump($a);

echo 'unshift<br>';
var_dump(array_unshift($a, 'Test'));  // 2 als neue Anzahl
var_dump($a);

array_push($a, 17);
var_dump($a);
