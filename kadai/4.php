<?php

$total = 0;
for($i=1; $i<100; $i++) {
  if($i % 3 == 0 || $i % 5 == 0) {
    $total = $total + $i;
  }
}

echo $total;

