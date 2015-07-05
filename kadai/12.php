<?php

$left  = 5;
$right = 2;

print_r(comb($left, $right));


function comb($left, $right)
{
  return kaijo($left)/kaijo($right);
}

function kaijo($n)
{
  if($n > 0) {
    return $n * kaijo($n - 1);
  } else {
    return 1;
  }
}
