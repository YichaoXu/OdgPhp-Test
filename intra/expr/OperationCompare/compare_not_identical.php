<?php
function test_case_0() { echo "Statement is false\n"; }
function test_case_1() { echo "Statement is true\n"; }

// boolean and integer
$a = true;
$b = 2;
$bool1 = (int)($a !== $b);
$action1 = 'test_case_' . $bool1;
$action1();

$c = 0;
$bool2 = (int)($a !== $c);
$action2 = 'test_case_' . $bool2;
$action2();

// boolean and boolean
$d = true;
$bool3 = (int)($a !== $d);
$action3 = 'test_case_' . $bool3;
$action3();

$e = false;
$bool4 = (int)($a !== $e);
$action4 = 'test_case_' . $bool4;
$action4();

// integer and integer
$x1 = 1;
$y1 = 2;
$bool5 = (int)($x1 !== $y1);
$action5 = 'test_case_' . $bool5;
$action5();

$x2 = 3;
$y2 = 3;
$bool6 = (int)($x2 !== $y2);
$action6 = 'test_case_' . $bool6;
$action6();

// integer and float, note here int is rounded to float instead of other way around
$x3 = 1;
$y3 = 1.0;
$bool7 = (int)($x3 !== $y3);
$action7 = 'test_case_' . $bool7;
$action7();

$x4 = 1;
$y4 = 1.4999;
$bool8 = (int)($x4 !== $y4);
$action8 = 'test_case_' . $bool8;
$action8();

// float and float
$x5 = 1.0101;
$y5 = 1.0101;
$bool9 = (int)($x5 !== $y5);
$action9 = 'test_case_' . $bool9;
$action9();

?>

