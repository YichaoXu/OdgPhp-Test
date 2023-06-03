<?php 

function no_param() {
    echo "no_param\n";
}

function one_param2($arg) {
    print("one_param2\t");
    $arg(); //(FDG: callsite) -> (FDG: callee) unsured
}

function one_param1($arg) {
    print("one_param1\t");
    $arg(); //(FDG: callsite) -> (FDG: callee) unsured
}

function two_param($a, $b) {
    print("two_param\t");
    $a($b); // (FDG: callsite) -> (FDG-callee: $a) unsured
            //                 -> (FDG-argumt: $b) unsured
    $b();   // (FDG: callsite) -> (FDG-callee: $b) unsured
}

two_param('one_param1', 'no_param');
two_param('one_param2', 'no_param');
