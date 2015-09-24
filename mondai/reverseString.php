<?php
/**
 * 文字列を逆にする関数
 */


/**
 * 文字を逆順にする
 *
 * @param string $str
 * @return string
 */
function reverseString($str)
{
  $length = mb_strlen($str, "UTF-8");

  $reverse = "";
  for($i=$length-1; $i>=0; $i--) {
    $reverse .= mb_substr($str, $i, 1, "UTF-8");
  }

  return $reverse;
}


$str = "あい　うえお abcd efg";
var_dump(reverseString($str));
