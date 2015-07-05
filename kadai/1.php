<?php

$nums = array();
for($i=1; $i<count($argv); $i++) {
  $nums[] = $argv[$i];
}

for($i=0; $i<count($nums); $i++) {
  for($j=$i+1; $j<count($nums); $j++) {
    if($nums[$i] > $nums[$j]) {
      $tmp = $nums[$i];
      $nums[$i] = $nums[$j];
      $nums[$j] = $tmp; 
    }
  }
}

foreach($nums as $value) {
  echo $value."\n";
}

echo "最小値:".$nums[0]."\n";
echo "最大値:".$nums[count($nums)-1];
