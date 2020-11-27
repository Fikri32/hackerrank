<?php
function minimumSwaps($arr) {
  $hitung = 0;
  $jumlah = count($arr);
  $temp = array();

  for($i = 0;$i<= $jumlah;$i++)
  {
    if($arr[0] > $arr[1])
    {
      $temp = $arr[0];
      $arr[0] = $arr[1];
      $arr[1] = $temp;
      $hitung += 1;

    }elseif($arr[1] > $arr[2])
    {
      $temp = $arr[1];
      $arr[1] = $arr[2];
      $arr[2] = $temp;
      $hitung += 1;
    }elseif($arr[2] > $arr[3])
    {
      $temp = $arr[2];
      $arr[2] = $arr[3];
      $arr[3] = $temp;
      $hitung += 1;
    }
    
  }
  print_r($arr);
  echo $hitung;
 
}
echo minimumSwaps(array(4 ,3 ,1 ,2));
?>