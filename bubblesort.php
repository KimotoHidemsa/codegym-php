<?php
$arr = [100, 5, 2, -10, 8, 10, -1, 15, 1,-100];
header('content-type: text/plain');
print_r(bubblesort($arr));

function bubblesort($arr) {
  do {
  $repeat = false;
  for ($i=0; $i<count($arr)-1; $i++) {
  if ($arr[$i] < $arr[$i+1]) continue;
  $tmp = $arr[$i];
  $arr[$i] = $arr[$i+1];
  $arr[$i+1] = $tmp;
  $repeat = true;
}
} while ($repeat);
return $arr;
}
