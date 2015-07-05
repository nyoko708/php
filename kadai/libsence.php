<?php

$nums = array(1,2,3,4,5,6,7);

$total = addOdd($nums);
function addOdd($nums) {

  $total = 0;
  foreach($nums as $key => $value) {
    if($key % 2 != 0) {
      $total = $total + $value;
    }
  }

  return $total;
}

$num = 11;

/**
 * 10進数を2進数にする
 */
function TenToTwo($num) {

  $amariArray = array();
  while($num / 2 > 0) {
    $amariArray[] = $num % 2;
    $num = floor($num / 2);
  }

  $count = count($amariArray);
  $two = "";
  for($i=$count; $i>=0; $i--) {
    $two .= $amariArray[$i]; 
  }

  return $two;
}

/**
 * 乗算表
 */

for($i=1; $i<=12; $i++) {
  $len = strlen($i);
  if($len == 3) {
    echo " ".$i;
  } elseif($len == 2) {
    echo "  ".$i;
  } elseif($len == 1) {
    echo "   ".$i;
  }
  for($j=1; $j<=12; $j++) {
    $num = $i*$j;
    $len2 = strlen($num);
    if($len2 == 3) {
      echo " ".$num;
    } elseif($len2 == 2) {
      echo "  ".$num;
    } elseif($len2 == 1) {
      echo "   ".$num;
    }
    if($j == 12) {
      echo "\n";
    }
  }
}
