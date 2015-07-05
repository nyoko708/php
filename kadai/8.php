<?php

$nums = array(12,6,8,3,10,1,0,9);

$sortNums = sortNums($nums);

for($i=0; $i<3; $i++) {
  foreach($nums as $key => $value) {
    if($sortNums[$i] == $value) {
      echo $key." => ".$sortNums[$i]."\n";
    }
  }
}

function sortNums($nums) {

  $count = count($nums);

  $data = array();
  for($i=0; $i<$count; $i++) {
    for($j=$i+1; $j<$count; $j++) {
      if($nums[$i] < $nums[$j]) {
        $tmp = $nums[$i];
        $nums[$i] = $nums[$j];
        $nums[$j] = $tmp;
      }
    }
  }
  return $nums;
}
