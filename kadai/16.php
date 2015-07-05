<?php

echo TenToTwo(11);

function TenToTwo($n)
{
  $amariArray = array();
  while($n / 2 > 0) {
    $amariArray[] = $n % 2;
    $n = floor($n / 2);
  }

  $count = count($amariArray);
  $two = "";
  for($i=$count; $i>=0; $i--) {
    $two .= $amariArray[$i];
  }

  return $two;
}
