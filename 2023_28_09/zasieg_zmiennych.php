<?php

$variable = 'aaaa' ;

echo $variable . "<br />";

$variable = 'bbb';

echo $variable . "<br />";

function a(){
    $variable = 'ccc';
}

a();

echo $variable . "<br />";

function b(){
    global $variable;

    $variable = 'dddd';
}

b();

echo $variable . "<br />";

function c(){
    global $new;

    $new = 'new';
}

c();

global $new;

echo $new . "<br />";

include "./other.php";

global $otherVariable;

echo $otherVariable . "<br />";

d();

$a = 5;

echo $a . "<br />";

function e($a) {
    $a=10;
}

a();

echo $a . "<br />";

function f(&$a) {
    $a = 10;
}

f($a);

echo $a . "<br />";