<?php
// Function definition with parameters
function num(int $n): int {
    echo "$n";
    return $n;
}
$a = 0b101010;
$b = num($a);

echo "$b";
?>