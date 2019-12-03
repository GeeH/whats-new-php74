<?php declare(strict_types=1);
require_once('vendor/autoload.php');

// order of parameters in implode wrong is deprecated
echo implode([1, 100, 1000, 10000], ", ") . PHP_EOL;
var_dump(explode(",", "1, 100, 1000, 10000"));

// access arrays with { } deprecated
$stuff = ['hello' => 'world'];
//echo $stuff{'hello'} . PHP_EOL;

// ternary complex nonsense deprecated
//echo 1 ? 2 : 3 ? 4 : 5 . PHP_EOL;
