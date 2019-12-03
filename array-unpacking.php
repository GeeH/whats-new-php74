<?php declare(strict_types=1);
require_once('vendor/autoload.php');

// @GeeH
$parts = ['apple', 'pear'];
$fruits =  array_merge(['banana', 'orange'], $parts, ['watermelon']);
var_dump($fruits);


// failed experiment to see if it worked with array keys
// $user = ['name' => 'Gary', 'slogan' => 'Don\'t forget to hit follow!', 'age' => 42];
//$extendedUser = ['twitter' => '@GeeH', ...$user];

//var_dump ($extendedUser);


// working example from https://www.php.net/manual/en/migration74.new-features.php#migration74.new-features.core.unpack-inside-array
$parts = ['apple', 'pear'];
$fruits = ['banana', 'orange', ...$parts, 'watermelon'];

var_dump($fruits);


// refresher course on argument unpacking and what it is
function add(int $a, int $b, int $c, int $d, int $e = 0, int $f = 0): int {
    return $a + $b + $c + $d + $e + $f;
}

assert(add(1,1,1,1,1,1) === 6, '6*1 should equal 6');
assert(add(...[1, 1, 1, 1, 1, 1,]) === 6, '6*1 splat should equal 6');