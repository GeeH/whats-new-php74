<?php declare(strict_types=1);
require_once('vendor/autoload.php');

$factor = 10;

// way 1
$nums = array_map(function($n) use ($factor) {
    return $n * $factor;
}, [1,2,3,4]);
var_dump($nums);

// way 2
$nums = array_map(fn($n) => $n * $factor, [1, 2, 3, 4]);
var_dump($nums);

// @GeeH
