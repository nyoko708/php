<?php
/**
 * 与えた文字列がすべてユニークであるか確認するメソッド
 */

$str = "あいうえおabcdefg";

/**
 * 文字列が重複していないかどうか？
 *
 * @param string $str
 * @return boolean
 */
function isUniqueString($str)
{
  $count = mb_strlen(trim($str), "UTF-8");

  $strArray = [];
  for($i=0; $i<$count; $i++) {
    $strArray[] = mb_substr($str, $i, 1, "UTF-8");
  }

  $uniqueFlags = array();
  for($i=0; $i<$count; $i++) {
    $val = $strArray[$i];
    if(array_key_exists($val, $uniqueFlags) && $uniqueFlags[$val] === true) {
      return false;
    }
    $uniqueFlags[$val] = true;
  }

  return true;
}


var_dump(isUniqueString($str));

