<?php

$str = "aあいbdaうdfえお45";

$revStr = revStr($str);

echo $str."\n";
echo $revStr."\n";

/**
 * 文字を反対にする
 */
function revStr($str) {

  $strCount = mb_strlen($str);

  $strArray = array();
  for($i=0; $i<$strCount; $i++) {
    $strArray[] = substr($str, $i, 1);
  }

  $revStr = "";
  for($i=$strCount; $i>=0; $i--) {
    $revStr .= $strArray[$i];
  }

  return $revStr;
}

function mb_strrev()
{

}
