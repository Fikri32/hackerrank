<?php
function divisibleSumPairs($n, $k, $ar) {
  $hitung = 0;
  $jumlah = 0;
  
  for($i = 0;$i < $n;$i++){

    for($j = $i+1;$j <= $n -1;$j++){
      $jumlah = $ar[$i] + $ar[$j];
      if($jumlah % $k == 0)
      {
        $hitung += 1;
      }
    }
  }
  
  // return $hitung;
  return $hitung;
  
}
echo divisibleSumPairs(6, 3, array(1 ,3 ,2 ,6 ,1 ,2));
?>