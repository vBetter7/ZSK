<?php

// typ integer
$i1 = 69;
$i2 = 0x45;
$i3 = 0105;
$i4 = 0b1000101;

echo "Decimal: ". $i1 ."<br />";
echo "hex: $i2 <br />";
echo "Octal: ". $i3 ."<br />";
echo "Binary: ". $i4 ."<br />";

//typ boolean
$b1 = true;
$b2 = false;

//typ float
$f1 = 1.14;

//typ string
$s1 = 'sample 1';
$s2 = "sample 2";
$s3 = <<<S3
    sample 3
    S3;
//nowdoc
$s4 = <<<'S4'
    sample 4
    S4;

//typ null
$n1 = null;
$n2 = NULL;

//typ tabliczny
$arr1 = [
    "abc",
    133,
    3.14
];

$arr =  array("afsfa", 133, 3.14);

//tablica asosacjacyna
$assoc = [
    "key1" => 7812,
    "k2" => "here",
    3 => 3.14
];
//tablica tablic
$arrOfArr = [
    [
        'jagha',
        2,
        4.13
    ],
    [
        2137,
        69
    ]
    ];

//typ obiektowy
$o1 = new stdClass();
$o1->attr = 1345;

//funkcje

function f1(){
    echo "kys";
}

f1();

function f2(): void
{
    echo "yo";
}

f2();

function f3($a1, $a2) {
    echo $a1 + $a2;
}

function f5() {
    return 'elo';
}

function f6(): string {
    return 'sup';
}