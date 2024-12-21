<?php
function foo(float $a, float $b): bool {
  // Define a small tolerance (epsilon) to account for floating-point precision errors
  $epsilon = 1e-10;
  return abs($a - $b) < $epsilon;
}

// Test cases
$result1 = foo(0.1 + 0.2, 0.3);
var_dump($result1); //Outputs bool(true)

$result2 = foo(1.0, 1.00000000000001);
var_dump($result2); //Outputs bool(true)

$result3 = foo(1.0, 2.0);
var_dump($result3); //Outputs bool(false)
?>