<?php

$i = 5;

var_dump(isSosu($i));

function isSosu($num) {
  for($i=2; $i<$num; $i++) {
    if($num % $i == 0) {
      return false;
    }
  }
  return true;
}
