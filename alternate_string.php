<?php
function alternatingCharacters($s) {
  $panjang = strlen($s);
  $pisah = str_split($s);
  $hitung = 0;
  for($i = 0;$i < $panjang;$i++)
  {
    if($pisah[$i] == $pisah[$i+1])
    {
      $hitung += 1;
    }
  }
  return $hitung;

}
echo alternatingCharacters()
?>