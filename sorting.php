<?php
function bigSorting($unsorted) {
  $temp = 0;
  $hitung = count($unsorted);
 
  for($i = 0;$i < $hitung ;$i++)
  {
    for($j = $i + 1;$j < $hitung; $j++)
    {
      if($unsorted[$i] > $unsorted[$j])
      {
        $temp = $unsorted[$i];
        $unsorted[$i] = $unsorted[$j];
        $unsorted[$j] = $temp;
      }
    }
  }
  return $unsorted;

}
print_r (bigSorting(array(6,2,5,100))); 
echo  bigSorting(array(6,2,5,100)); 
?>

