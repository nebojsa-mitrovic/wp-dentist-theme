<?php
// limit the number of words from content (use: blog/news)
function firstnwords($text, $limit) {
  $word_arr = explode(" ", $text);
  if (count($word_arr) > $limit) {
      $words = implode(" ", array_slice($word_arr , 0, $limit) );
      return $words . " [...] ";
  }
  return $text;
}
