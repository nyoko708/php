<?php

$number = 4;

if(isPrime($number)) {
  echo "素数\n";
} else {
  echo "素数ではない\n";
}


/**
 * 素数判定の関数
 */
function isPrime($num) {

  for($i=2; $i<$num; $i++) {
    if($num % $i == 0) {
      return false;
    }
  }

  return true;
}

