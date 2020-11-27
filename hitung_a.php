<?php
function repeatedString($s, $n) {
  $jumlah = 0;
  $length = strlen($s);
  $pisah = str_split($s);
  $hitung = substr_count($s,'a');
  // for($i = 0;$i < $n % $length; $i++)
  // {
  //   if($s[$i] == 'a')
  //   {
  //     $jumlah += 1;
  //   }
  // }
  return $hitung;
}
echo repeatedString('aba',10)
?>