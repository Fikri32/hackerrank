<?php
function sockMerchant($ar) {
  $match = 0;
  $hitung = count($ar);
  for($i = 0;$i < $hitung ;$i++)
  {
    $j = $ar[$i];
  }
  for($s = 0;$s < $hitung - 1 ;$s++){
    if($ar[$s] == $j)
    {
      $match += 1;
    }
  }
  return $match;

}
echo  sockMerchant(array(1,1,3,1,2,1,3,3,3,3)); 
?>

