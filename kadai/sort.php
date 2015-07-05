<?php

$nums = array(5,3,1,2,4);

// バブルソート
$sortNums = sortNums($nums);

//



// バブルソート
function sortNums($nums) {

  $count = count($nums);

  for($i=0; $i<$count; $i++) {
    for($j=$i+1; $j<$count; $j++) {
      if($nums[$i] > $nums[$j]) {
        $tmp = $nums[$i];
        $nums[$i] = $nums[$j];
        $nums[$j] = $tmp;
      }
    }
  }

  return $nums;
}

// クイックソート
function quickSort($nums) {

  $tmpNums = array();

  $count = count($nums);

}
