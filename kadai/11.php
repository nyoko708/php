<?php

$n = 4;

echo kaijo($n)."\n";
echo kaijo2($n)."\n";

function kaijo($n)
{
  if($n > 0) {
    return $n * kaijo($n - 1);
  } else {
    return 1;
  }
}

function kaijo2($n)
{
  $total = 1;
  for($i=$n; $i>0; $i--) {
    $total = $total * $i;
  }
  return $total;
}
