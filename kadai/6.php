<?php

$total = 0;
for($i=1; $i<=100; $i++) {
  if($i % 2 == 0) {
    $total = $total + $i;    
  }
}

echo $total;
