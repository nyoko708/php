<?php

for($i=1; $i<=100; $i++) {
  if($i % 3 == 0 || preg_match("/3/", $i)) {
    echo "Aho!!\n";
  } else {
    echo $i."\n";
  }
}
