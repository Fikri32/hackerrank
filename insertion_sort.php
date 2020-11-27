<?php
function insertionSort1($n, $arr) {
  for($i = 0 ;$i < $n;$i++)
  {
    $val = $arr[$i];
    $j = $i-1;
    while($j>=0 && $arr[$j] > $val){
      $arr[$j+1] = $arr[$j];
      $j--;
    }
    $arr[$j+1] = $val;
  }
  return $arr;
}
  

// print_r(insertionSort1(5,array(2 ,4 ,6 ,8, 3)));
echo insertionSort1(5,array(2 ,4 ,6 ,8, 3));
?>
