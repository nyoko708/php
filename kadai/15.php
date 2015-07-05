<?php

echo kaijo(3);

function kaijo($n) 
{
  if($n > 0) {
    return $n * kaijo($n-1);
  } else {
    return 1;
  }
}
