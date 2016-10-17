<?php

echo time(). '<hr>';

echo strftime('%d.%m.%Y'). '<hr>';

echo strftime('%Y_%m_%d - %H:%M:%S'). '<hr>';

$geb = mktime(10,0,0,1,11,2017);


echo strftime('%Y_%m_%d - %H:%M:%S - %a', $geb). '<hr>';