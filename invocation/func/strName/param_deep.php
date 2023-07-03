<?php
function no_param(): void { echo "no_param\n"; }
function no_param3($param): void { echo "no_param3\n"; $param(); }
function no_param2($param): void { echo "no_param2\n"; no_param3($param); }
function no_param1($param): void { echo "no_param1\n"; no_param2($param); }
function single_param($param): void { echo "single_param \t"; no_param1($param);  }
single_param("no_param");
