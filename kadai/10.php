<?php

$array = array(3,5,2,4,2);

$count = count($array);
for($i=0; $i<$count; $i++) {
  if($i != 0) {
    $array[$i] = 0;
  }
}

print_r($array);
