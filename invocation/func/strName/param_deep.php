<?php
function no_param(): void { echo "no_param\n"; }

function no_param1($param): void { echo "no_param1\n"; $param(); }
function single_param($param): void { echo "single_param \t"; no_param1($param);  }
single_param("no_param");
