<?php

$ninzu = $argv[1];
$card   = $argv[2];

$count = strlen($card);
$cardArray = array();
for($i=0; $i<$count; $i++) {
  $cardArray[] = substr($card, $i, 1);
}

$amari = $count % $ninzu;
$kubarikiru = $count - $amari;

// カードを配る
$num = 0;
$member = array();
$i=0;
foreach($cardArray as $key => $value) {

  if($i == $kubarikiru) {
    break;
  }

  $member[$num] .= $value;
  if($num == ($ninzu-1)) {
    $num = 0;
  } else {
    $num++;
  }

  $i++;
}

print_r($member);
