<?php

$ninzu = $argv[1];
$card  = $argv[2];

$count = strlen($card);
$cards = array();
for($i=0; $i<$count; $i++) {
  $cards[] = substr($card, $i, 1);  
}

$amari = $count % $ninzu;
$kubarikiru = $count - $amari;

var_dump($kubarikiru);

// 配っていく
$x=0;
$y=0;
$members = array();
foreach($cards as $key => $value) {

  if($y == $kubarikiru) {
    break;
  }

  $members[$x] .= $value;

  if($x == $ninzu-1) {
    $x = 0;
  } else {
    $x++;
  }

  $y++; 
}

print_r($members);
