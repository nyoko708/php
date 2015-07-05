<?php

hanoi(3);

function hanoi($n, $from="a", $work="b", $to="c")
{
  $count = 0;

  if($n == 1) {
    echo ++$i." : ".$from." to ".$to."\n";
  } else {
    hanoi($n-1);
    echo ++$i." : ".$from." to ".$to."\n";
    hanoi($n-1, "b", "c", "a");
  }
}
