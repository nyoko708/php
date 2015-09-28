<?php
/**
 * ある文字列とある文字列が、アナグラムであるかどうか判定せる
 *
 * @desc
 *   アナグラムとは、単語または文の中の文字をいくつか入れ替えることによって全く別の意味にさせる遊び
 */

/**
 * アナグラム判定(ただし、半角英数字のみ)
 *
 * @param string $str1
 * @param string $str2
 * @return boolean
 */
function isAnagram($str1, $str2)
{
  $strs1 = _sort($str1);
  $strs2 = _sort($str2);

  if($strs1 !== $strs2) {
    return false;
  }

  return true;
}

/**
 * 文字列の中のスペースを除去して、aから順にソートする
 * @param string $str
 * @return string
 */
function _sort($str)
{
  $str = str_replace(" ", "", trim($str));
  $strs = str_split($str);
  $strs = array_filter($strs);
  sort($strs);
  return $strs;
}

$str1 = "anagrams";
$str2 = "ars magna";

var_dump(isAnagram($str1, $str2));
