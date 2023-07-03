<?php

function callee2() {
    echo "IN CALLEE\n";
}

function callee1() {
    echo "IN CALLEE 1\n";
    callee2(); // Line 2
}
function caller() {
    echo "IN CALLER\n";
    callee1(); // Line 3
}

caller(); // Line 6