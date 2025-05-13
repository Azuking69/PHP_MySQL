<?php
  $x = 'apple';
  $y = "사과";
  
  var_dump($x);
  echo "<br>";
  var_dump($y); 
  /* ハングルなので、1文字が UTF-8では3バイト, 2 * 3 = 6
?>