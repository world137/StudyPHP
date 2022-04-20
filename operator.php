<?php

// $a = 10;
// $b = 3;
// $c = $a + $b;

// echo $a%$b;

$d = 500;
$e ='500';
$f = 400;

echo '==';
var_dump($d == $e);
echo '<br>';
echo '===';
var_dump($d === $e);
echo '<br>';
echo '<>';
var_dump($d <> $e);
echo '<br>';
echo '!==';
var_dump($d !== $e);
echo '<br>';
echo '<=>';
var_dump($d <=> $e);
var_dump($d <=> $f);
var_dump($f <=> $e);

?>